<?php

namespace App\GraphQl\Type\Products;

use App\Entity\Products\Products;
use App\GraphQl\System\EntityType;
use App\GraphQl\System\Types;
use GraphQL\Type\Definition\Type;

class ProductType extends EntityType
{
    public function __construct()
    {
        $this->typeName = 'ProductType';
        $this->entity = new Products();

//        $this->additionalFields['ProductsAttributes'] = [
//            'type' => Type::listOf(Types::type(ProductsAttributesType::class)),
//            'resolve' => function ($rootValue, array $args): array | null {
//                var_dump($rootValue);
//                die();
//                if (isset($rootValue['productsAssignmentTypes'])) {
//                    return $rootValue['productsAssignmentTypes'];
//                }
//                return null;
//            },
//        ];

        parent::__construct();
    }

}