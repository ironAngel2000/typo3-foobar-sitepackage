<?php

namespace App\GraphQl\Type\Orders;

use App\Entity\Orders\Orders;
use App\Entity\Orders\OrdersLines;
use App\GraphQl\Helper\EntityManagerHelper;
use App\GraphQl\System\EntityType;
use App\GraphQl\System\Types;
use GraphQL\Type\Definition\Type;

class OrdersType extends EntityType
{
    public function __construct()
    {
        $this->typeName = 'OrdersType';
        $this->entity = new Orders();

        $this->additionalFields['orderLines'] = [
            'type' => Type::listOf(Types::type(OrdersLinesType::class)),
            'resolve' => function ($rootValue, array $args): array | null {
               return $this->getOrderLine((int)$rootValue['ordersId']);
            },
        ];

        parent::__construct();
    }

    protected function getOrderLine(int $orderId): array | null
    {
        $entityManager = EntityManagerHelper::getEntityManager();
        $orderLines = $entityManager->getRepository(OrdersLines::class)
            ->findBy(['orders_id' => $orderId]);

        $ret = null;

        if(is_array($orderLines)) foreach ($orderLines as $orderLine) {
            if($orderLine instanceof OrdersLines) {
                $ret[] = $orderLine->toArray();
            }
        }
        return $ret;
    }

}