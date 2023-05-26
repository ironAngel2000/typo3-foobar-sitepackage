<?php

namespace App\GraphQl\Type\Products;

use App\Entity\Products\ProductsAttributes;
use App\GraphQl\System\EntityType;
use App\GraphQl\System\Types;
use GraphQL\Type\Definition\Type;

class ProductsAttributesType extends EntityType
{
    public function __construct()
    {
        $this->typeName = 'ProductsAttributesType';
        $this->entity = new ProductsAttributes();

        parent::__construct();
    }

}