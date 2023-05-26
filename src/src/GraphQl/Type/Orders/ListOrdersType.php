<?php

namespace App\GraphQl\Type\Orders;

use App\GraphQl\System\Types;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class ListOrdersType extends ObjectType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'ListOrdersType',
            'fields' => [
                'page' => [
                    'type' => Type::int(),
                    'resolve' => function ($rootValue, array $args): string {
                        if (isset($rootValue['page'])) {
                            return (int)$rootValue['page'];
                        }
                        return 0;
                    },
                ],
                'show' => [
                    'type' => Type::int(),
                    'resolve' => function ($rootValue, array $args): string {
                        if (isset($rootValue['show'])) {
                            return (int)$rootValue['show'];
                        }
                        return 0;
                    },
                ],
                'nextPage' => [
                    'type' => Type::int(),
                    'resolve' => function ($rootValue, array $args): string {
                        if (isset($rootValue['nextPage'])) {
                            return (int)$rootValue['nextPage'];
                        }
                        return 0;
                    },
                ],
                'orders' => [
                    'type' => Type::listOf(Types::type(OrdersType::class)),
                    'resolve' => function ($rootValue, array $args): array|null {
                        if (isset($rootValue['orders']) && is_array($rootValue['orders'])) {
                            return $rootValue['orders'];
                        }
                        return null;
                    },
                ],
            ]
        ]);

    }
}
