<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ToolsController extends AbstractController
{

    private $database = 'tierpharma';


    public function __construct(protected EntityManagerInterface $entityManager)
    {
    }

    public function index(Request $request)
    {

    }

    public function generateModels()
    {

        print_r('start: '. (new \DateTime())->format('H:i:s')).PHP_EOL;
        echo '<pre style="min-height: 100vh; position: relative; z-index: 10000000">';
        $tables = $this->getAllDbTables();

        foreach ($tables as $table){
            $tableName = trim($table['TABLE_NAME']);
            $className = $this->extractEntityClassFromTable($tableName);
            $entityFound = class_exists($className);

            if ($entityFound === false) {
                $this->createEntityClass($tableName, $className);
            }
        }
        echo '</pre>';

        die();

        $response = new Response();
        $response->setContent('<pre>models generated'.PHP_EOL. print_r('end: '. (new \DateTime())->format('H:i:s')).PHP_EOL.'</pre>');
        return $response;
    }

    protected function getAllDbTables() : array
    {

        $sql = <<<SQL
        SELECT TABLE_NAME FROM information_schema.tables
        WHERE TABLE_SCHEMA = "$this->database";
        SQL;

        $conn = $this->entityManager->getConnection();

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        $result = $resultSet->fetchAllAssociative();

        if(is_array($result)) {
            return $result;
        }

        return [];
    }

    protected function extractEntityClassFromTable(string $tableName): string
    {
        $arrName = explode('_',$tableName);
        $prefix=$arrName[0];
        $namspace = 'App\\Entity\\'.ucfirst($prefix);
        $className = '';
        foreach ($arrName as $segment){
            $className .= ucfirst($segment);
        }
        return $namspace.'\\'.$className;
    }

    protected function createEntityClass(string $tablename, string $className)
    {
        $filePath = str_replace('/Controller','', __DIR__);

        $arrClassPath = explode('\\',$className);
        $templateEntity = $filePath.'/Templates/EntityTemplate.txt';
        $templateRepository = $filePath.'/Templates/RepostoryTemplate.txt';

        $classFile = $filePath;
        $repositoryClass = '';
        foreach ($arrClassPath as $index => $segment) {
            $classFile .= '/'.$segment;
            $repositoryClass .= $segment;
            if($index < (count($arrClassPath)-1)) {
                $repositoryClass .= '\\';
            }
        }

        $classFile = str_replace('/App/','/',$classFile);
        $repositoryFile = str_replace('/Entity/','/Repository/',$classFile);
        $repositoryClass = str_replace('\\Entity\\','\\Repository\\',$repositoryClass);
        $classFile .= '.php';
        $repositoryFile .= 'Repository.php';
        $repositoryClass .= 'Repository';

        $this->generateEntityClass(
            $templateEntity,
            $tablename,
            $className,
            $repositoryClass,
            $classFile,
        );

        $this->generateRepositoryClass(
            $templateRepository,
            $className,
            $repositoryClass,
            $repositoryFile
        );

    }

    protected function generateEntityClass(
        string $templateEntity,
        string $tablename,
        string $entityClass,
        string $repositoryClass,
        string $classFile,
    )
    {

        $arrClassPrm = $this->getClassNamespace($entityClass);
        $nameSpace = $arrClassPrm['namespace'];
        $className = $arrClassPrm['classname'];

        $repositoryClassName = $this->getClassNamespace($repositoryClass)['classname'];

        $body = $this->makeEntityClassBody($tablename);

        $strTemplateEntity = '';
        $fIndex = fopen($templateEntity, 'r');
        while ($line = fgets($fIndex)) {
            $strTemplateEntity .= $line;
        }
        fclose($fIndex);

        $strTemplateEntity = str_replace('[NAMESPACE]',$nameSpace, $strTemplateEntity);
        $strTemplateEntity = str_replace('[CLASSNAME]',$className, $strTemplateEntity);
        $strTemplateEntity = str_replace('[REPOSITORYCLASS]',$repositoryClass, $strTemplateEntity);
        $strTemplateEntity = str_replace('[REPOSITORYCLASSNAME]',$repositoryClassName, $strTemplateEntity);
        $strTemplateEntity = str_replace('[TABLENAME]',$tablename, $strTemplateEntity);
        $strTemplateEntity = str_replace('[CLASSBODY]',$body, $strTemplateEntity);

        $this->checkDirectory($classFile);
        $fIndex = fopen($classFile,'w');
        fwrite($fIndex, $strTemplateEntity);
        fclose($fIndex);
    }

    protected function makeEntityClassBody(string $tablename) : string
    {
        $body = '';

        $sql =<<<SQL
        SELECT 
            COLUMN_NAME,
            IS_NULLABLE,
            DATA_TYPE,
            COLUMN_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = "$this->database" AND TABLE_NAME = "$tablename";
        SQL;

        $conn = $this->entityManager->getConnection();

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        $result = $resultSet->fetchAllAssociative();

        $fields = [];
        $functions = [];

        foreach ($result as $itemIndex => $item) {

            $colName = trim($item['COLUMN_NAME']);
            $colFormatName = '';
            $arrColName = explode('_', $colName);
            foreach ($arrColName as $segment){
                $colFormatName .= ucfirst($segment);
            }

            $fieldLine = '';
            if($itemIndex === 0) {
                $fieldLine .= "\t".'#[ORM\Id]'.PHP_EOL;
                $fieldLine .= "\t".'#[ORM\GeneratedValue]'.PHP_EOL;
            }

            $setter = "\t".'public function set'.$colFormatName.'(';
            $getter = "\t".'public function get'.$colFormatName.'()';

            switch ($item['DATA_TYPE']){
                case 'datetime':
                    $fieldLine .= "\t".'#[ORM\Column(type: Types::DATETIME_MUTABLE)]'.PHP_EOL;
                    $fieldLine .= "\t".'private ?\DateTimeInterface $'.$colName.' = null;'.PHP_EOL;

                    $setter .= '\DateTimeInterface $'.$colName.') : self'.PHP_EOL."\t".'{'.PHP_EOL;
                    $getter .= ':  ?\DateTimeInterface'.PHP_EOL."\t".'{';
                    break;
                case 'varchar':
                    $len = (int) str_replace(['varchar(',')'],'',$item['COLUMN_TYPE']);
                    if($item['IS_NULLABLE']==='NO'){
                        $fieldLine .= "\t".' #[ORM\Column(length: '.$len.')]'.PHP_EOL;
                    } else {
                        $fieldLine .= "\t".'#[ORM\Column(length: '.$len.', nullable: true)]'.PHP_EOL;
                    }
                    $fieldLine .= "\t".'private ?string $'.$colName.' = null;'.PHP_EOL;

                    $setter .= 'string $'.$colName.') : self'.PHP_EOL."\t".'{'.PHP_EOL;
                    $getter .= ':  ?string'.PHP_EOL."\t".'{';
                    break;
                case 'int':
                    if($item['IS_NULLABLE']==='NO'){
                        $fieldLine .= "\t".'#[ORM\Column]'.PHP_EOL;
                    } else {
                        $fieldLine .= "\t".'#[ORM\Column(nullable: true)]'.PHP_EOL;
                    }
                    $fieldLine .= "\t".'private ?int $'.$colName.' = null;'.PHP_EOL;

                    $setter .= 'int $'.$colName.') : self'.PHP_EOL."\t".'{'.PHP_EOL;
                    $getter .= ':  ?int'.PHP_EOL."\t".'{';
                    break;
                default:
                    if($item['IS_NULLABLE']==='NO'){
                        $fieldLine .= "\t".'#[ORM\Column]'.PHP_EOL;
                    } else {
                        $fieldLine .= "\t".'#[ORM\Column(nullable: true)]'.PHP_EOL;
                    }
                    $fieldLine .= "\t".'private ?string $'.$colName.' = null;'.PHP_EOL;

                    $setter .= 'string $'.$colName.') : self'.PHP_EOL."\t".'{'.PHP_EOL;
                    $getter .= ':  ?string'.PHP_EOL."\t".'{';
                    break;
            }

            $setter .= "\t\t".'$this->'.$colName.' = $'.$colName.';'.PHP_EOL;
            $setter .= "\t\t".'return $this;'.PHP_EOL;
            $setter .= "\t".'}'.PHP_EOL;

            $getter .= PHP_EOL."\t\t".'return $this->'.$colName.';'.PHP_EOL;
            $getter .= "\t".'}'.PHP_EOL;

            $fields[$colName] = $fieldLine;

            $functions[$colName] = [
                'getter' => $getter,
                'setter' => $setter,
            ];

        }


        foreach ($fields as $fieldLine) {
            $body .= $fieldLine.PHP_EOL;
        }

        foreach ($functions as $function){
            $body .= $function['getter'].PHP_EOL;
            $body .= $function['setter'].PHP_EOL;
        }

        return $body;
    }

    protected function generateRepositoryClass(
        string $templateRepository,
        string $entityClass,
        string $repositoryClass,
        string $repositoryFile
    )
    {

        $arrClassPrm = $this->getClassNamespace($repositoryClass);
        $nameSpace = $arrClassPrm['namespace'];
        $className = $arrClassPrm['classname'];

        $entityClassName = $this->getClassNamespace($entityClass)['classname'];


        $strTemplateRepository = '';
        $fIndex = fopen($templateRepository, 'r');
        while ($line = fgets($fIndex)) {
            $strTemplateRepository .= $line;
        }
        fclose($fIndex);

        $strTemplateRepository = str_replace('[NAMESPACE]',$nameSpace, $strTemplateRepository);
        $strTemplateRepository = str_replace('[CLASSNAME]',$className, $strTemplateRepository);
        $strTemplateRepository = str_replace('[ENTITYCLASS]',$entityClass, $strTemplateRepository);
        $strTemplateRepository = str_replace('[ENTITYCLASSNAME]',$entityClassName, $strTemplateRepository);

        $this->checkDirectory($repositoryFile);
        $fIndex = fopen($repositoryFile,'w');
        fwrite($fIndex, $strTemplateRepository);
        fclose($fIndex);

    }

    protected function checkDirectory(string $filePath)
    {
        $arrFilePath = explode('/', $filePath);
        $checkPath = '';
        foreach ($arrFilePath as $index=>$segment) {
            if($index < (count($arrFilePath) - 1)) {
                $checkPath .= $segment.'/';
                if($checkPath !== '/'){
                    if(is_dir($checkPath) === false){
                        mkdir($checkPath, 0777);
                    }
                }
            }
        }
    }

    protected function getClassNamespace(string $class): array
    {
        $arrClass = explode('\\', $class);

        $className = end($arrClass);
        $nameSpace = '';
        foreach ($arrClass as $index => $segment){
            if($index >= count($arrClass)-1){
                break;
            }
            if(trim($nameSpace) !== ''){
                $nameSpace .='\\';
            }
            $nameSpace .= $segment;
        }

        $ret = [
            'namespace' => $nameSpace,
            'classname' => $className,
        ];

        return $ret;
    }


}