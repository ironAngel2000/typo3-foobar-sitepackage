<?php

namespace App\Controller;

use App\Entity\Products\Products;
use App\GraphQl\Helper\EntityManagerHelper;
use App\GraphQl\Schema\defaultSchema;
use App\GraphQl\System\GraphQLSchema;
use App\GraphQl\System\QueryObjectClass;
use Doctrine\ORM\EntityManagerInterface;
use GraphQL\Server\Helper;
use GraphQL\Server\StandardServer;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Introspection;
use GraphQL\Type\SchemaConfig;
use GraphQL\Utils\BuildSchema;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use GraphQL\Type\Schema;

class GraphQlController extends AbstractController
{

    protected array $headers = [];
    protected $queryType;
    protected $queryName;

    protected GraphQLSchema $schema;

    public function __construct(EntityManagerInterface $entityManager)
    {
        EntityManagerHelper::setEntityManager($entityManager);
    }

    public function index(Request $request)
    {
        $this->schema = new defaultSchema();
        $this->exectueRequest($request);

        $response = new Response();
        return $response;
    }

    protected function crossOriginHeaders(): void
    {
        // TODO: Implement init() method.
        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
            // whitelist of safe domains
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        }

        header("Content-type:application/json");
    }

    protected function exectueRequest(Request $request)
    {
        $objHelper = new Helper();
        $request = $objHelper->parseHttpRequest();
        $query = $request->query;
        $this->extractQuery($query);



        if($this->queryName === 'introspectionquery'){
            $this->returnIntrospectionquery();
            return;
        }

        $queries = $this->schema->getQueries();

        if (!isset($queries[$this->queryName])) {
            throw new \Exception('query not found');
        }

        $objQuery = new $queries[$this->queryName]($this->headers);
        if ($objQuery instanceof QueryObjectClass) {
            $this->crossOriginHeaders();
            $objQuery->setHeader($this->headers);
            $objQuery->execute();
        }
    }

    protected function returnIntrospectionquery() {

        $queries = $this->schema->getQueries();

        $arrConf = [];

        /*
        foreach ($queries as $queryClass) {
            $objQuery = new $queryClass($this->headers);
            if ($objQuery instanceof QueryObjectClass){
                $arrConf[] = $objQuery->introspectionResult();
            }
        }
        */

        $objQuery = new $queries['orderlist']($this->headers);
        if ($objQuery instanceof QueryObjectClass){
            $arrConf = $objQuery->introspectionResult();
        }

        //$merged = array_merge_recursive(...$arrConf);
        $ret = [
            'data'  => $arrConf
        ];

        echo json_encode($ret);
    }


    protected function extractQuery(string $query)
    {
        $query = strtolower(trim($query));
        $type = '';
        $resolve = '';

        if (stristr($query, 'introspectionquery')) {
            $this->queryType = 'query';
            $this->queryName = 'introspectionquery';
            return;
        }

        if (stristr($query, 'query')) {
            $type = 'query';
        }
        if (stristr($query, 'mutation')) {
            $type = 'mutation';
        }

        if ($type !== '') {
            $resolve = explode($type, $query);
            $resolve = array_pop($resolve);
            $resolve = str_replace(["\r", "\n", " ", "  ", "\t"], '', $resolve);
            $resolve = explode('{', $resolve);
            foreach ($resolve as $name) {
                if (trim($name) !== '') {
                    $resolve = $name;
                    break;
                }
            }
            $resolve = explode('(', $resolve);
            $resolve = trim($resolve[0]);
        }

        $this->queryType = $type;
        $this->queryName = $resolve;

    }
}

