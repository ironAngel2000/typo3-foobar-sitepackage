<?php

namespace App\GraphQl\Type\Products;

use App\Entity\Products\ProductsAssignmentTypes;
use App\GraphQl\System\EntityType;

class ProductsAssignmentTypesType  extends EntityType
{
    public function __construct()
    {
        $this->typeName = 'ProductsAssignmentTypesType';
        $this->entity = new ProductsAssignmentTypes();

        parent::__construct();
    }

}