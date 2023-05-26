<?php

namespace App\GraphQl\Schema;

use App\GraphQl\Query\IntrospectionQuery;
use App\GraphQl\Query\Orders\OrderListQuery;
use App\GraphQl\Query\Products\ProductQuery;
use App\GraphQl\Query\ServerStatusQuery;
use App\GraphQl\System\GraphQLSchema;

class defaultSchema extends GraphQLSchema
{
    public function toConfig(): array
    {
        return [
            GraphQLSchema::TYPE_QUERIES => [
                ServerStatusQuery::class,
                ProductQuery::class,
                OrderListQuery::class,
            ],
            GraphQLSchema::TYPE_MUTATIONS => [],
        ];
    }
}