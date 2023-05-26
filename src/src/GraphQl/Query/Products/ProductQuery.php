<?php

namespace App\GraphQl\Query\Products;

use App\Entity\Products\Products;
use App\GraphQl\Helper\EntityManagerHelper;
use App\GraphQl\System\QueryClass;
use App\GraphQl\Type\Products\ProductType;
use GraphQL\Type\Definition\Type;

class ProductQuery extends QueryClass
{
    protected string $name = 'Product';

    public function __construct()
    {
        $this->responseType = ProductType::class;
        $this->args = [
            'productId' => type::int(),
        ];
        parent::__construct();
    }

    protected function resolve(array $args = [])
    {
        $pId = $args['productId'];

        $entityManager = EntityManagerHelper::getEntityManager();

        $product = $entityManager->getRepository(Products::class)->find($pId);

        if (!$product) {
            return [];
        }

        return $product->toArray();
    }
}