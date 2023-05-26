<?php

namespace App\GraphQl\Helper;

use ReflectionClass;
use ReflectionMethod;

trait EntityFieldsHelper
{
    public static function outputFields(): array
    {
        $reflection = new ReflectionClass(self::class);
        $methods = $reflection->getMethods(ReflectionMethod::IS_PUBLIC);

        $ret = [];
        foreach ($methods as $method) {
            $name = $method->name;
            if (substr($name,0,3) === 'get'){
                $type = $method->getReturnType();
                $fieldType = 'string';
                if($type !== null) {
                    $fieldType = $type->getName();
                }
                $field = substr($name,3,(strlen($name)- 3));
                $field = lcfirst($field);
                $ret[$field] = $fieldType;
            }
        }

        return $ret;
    }

    public function toArray(): array
    {
        $fields = self::outputFields();
        $ret = [];

        foreach ($fields as $field=>$type){
            $getter = 'get'.ucfirst($field);
            $retVal = $this->{$getter}();

            if($retVal instanceof \DateTime){
                $retVal = $retVal->format('c');
            }
            $ret[$field] = $retVal;
        }

        return $ret;
    }
}