<?php

namespace App\GraphQl\System;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use Doctrine\ORM\Mapping as ORM;

abstract  class EntityType  extends ObjectType
{
    protected object $entity;
    protected string $typeName;
    protected array $additionalFields = [];

    public function __construct()
    {
        $fields = $this->getObjectFields();

        if(count($this->additionalFields) > 0)
            foreach ($this->additionalFields as $fieldName => $config){
            $fields[$fieldName] = $config;
        }
        parent::__construct([
            'name' => $this->typeName,
            'fields' => $fields,
        ]);
    }
    protected function getObjectFields(): array
    {
        $fields = $this->entity::outputFields();
        $ret = [];

        foreach ($fields as $name => $type) {
            $name = trim($name);
            switch (strtolower($type)) {
                case 'int':
                    $resolveType = Type::int();
                    $defaultRet = 0;
                    break;
                case 'float':
                    $resolveType = Type::float();
                    $defaultRet = 0;
                    break;
                case 'boolean':
                    $resolveType = Type::boolean();
                    $defaultRet = false;
                    break;
                case 'datetimeinterface':
                    //no break
                default:
                    $resolveType = Type::string();
                    $defaultRet = '';
                    break;
            }

            $ret[$name] = [
                'name' => $name,
                'type' => $resolveType,
                'resolve' => function ($rootValue, array $args) use ($name, $defaultRet)  {
                    if (isset($rootValue[$name])) {
                        return $rootValue[$name];
                    }
                    return $defaultRet;
                },
            ];
        }

        return $ret;
    }
}