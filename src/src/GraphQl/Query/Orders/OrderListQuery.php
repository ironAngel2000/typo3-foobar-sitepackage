<?php

namespace App\GraphQl\Query\Orders;

use App\Entity\Orders\Orders;
use App\GraphQl\Helper\EntityManagerHelper;
use App\GraphQl\System\QueryClass;
use App\GraphQl\Type\Orders\ListOrdersType;
use GraphQL\Type\Definition\Type;

class OrderListQuery extends QueryClass
{
    protected string $name = 'OrderList';

    public function __construct()
    {
        $this->responseType = ListOrdersType::class;
        $this->args = [
            'limit' => type::int(),
            'page' => type::int(),
        ];
        parent::__construct();
    }

    protected function resolve(array $args = [])
    {
        $limit = (int)$args['limit'] ?? 100;
        $page = (int)$args['page'] ?? 0;

        $entityManager = EntityManagerHelper::getEntityManager();

        $orders = $entityManager->getRepository(Orders::class);
        $results = $orders->createQueryBuilder('orders')
            ->setMaxResults($limit + 1)
            ->setFirstResult(($limit * $page))
            ->getQuery()
            ->getResult();

        $ret = [
            'page' => 0,
            'show' => 0,
            'nextPage' => 0,
            'orders' => null
        ];

        if(is_array($results) && count($results) > 0){
            $ret = [
                'page' => $page,
                'show' => count($results),
                'nextPage' => count($results) > $limit ? $page + 1 : $page,
                'orders' => $this->resolveOrders($results)
            ];
        }

        return $ret;
    }

    protected function resolveOrders(array $results): array
    {
        $ret = [];
        foreach ($results as $objOrder) {
            if($objOrder instanceof Orders) {
                $ret[] = $objOrder->toArray();
            }
        }

        return $ret;
    }
}