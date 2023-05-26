<?php

namespace App\GraphQl\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class StatusType extends ObjectType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Status',
            'fields' => [
                'status' => [
                    'type' => Type::string(),
                    'resolve' => function ($rootValue, array $args): string {
                        if (isset($rootValue['status'])) {
                            return trim($rootValue['status']);
                        }
                        return '';
                    },
                ],
            ]
        ]);
    }
}