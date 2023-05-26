<?php

namespace App\GraphQl\Type\Orders;

use App\Entity\Orders\OrdersLines;
use App\GraphQl\System\EntityType;
use App\GraphQl\System\Types;
use App\GraphQl\Type\Products\ProductType;
use GraphQL\Type\Definition\Type;

class OrdersLinesType extends EntityType
{
    public function __construct()
    {
        $this->typeName = 'OrdersLinesType';
        $this->entity = new OrdersLines();


        $this->additionalFields['products'] = [
            'type' => Type::listOf(Types::type(ProductType::class)),
            'resolve' => function ($rootValue, array $args): array | null {
                return $this->getProductData((int)$rootValue['productsId ']);
            },
        ];

        parent::__construct();
    }


    protected function getProductData(int $productId) : array | null
    {
        return null;
    }

}