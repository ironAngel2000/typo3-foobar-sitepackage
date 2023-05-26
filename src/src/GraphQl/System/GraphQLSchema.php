<?php

namespace App\GraphQl\System;

abstract class GraphQLSchema
{
    public const TYPE_QUERIES = 'queries';
    public const TYPE_MUTATIONS = 'mutations';

    protected array $queries = [];

    final public function __construct() {
        $config = $this->toConfig();

        $type = GraphQLSchema::TYPE_QUERIES;
        if(isset($config[$type]) && is_array($config[$type])) {
            foreach ($config[$type] as $queryClass) {
                $query = new $queryClass();
                if($query instanceof QueryClass) {
                    $name = $query->name();
                    $this->queries[strtolower($name)] = $queryClass;
                }
            }
        }

        $type = GraphQLSchema::TYPE_MUTATIONS;
        if(isset($config[$type]) && is_array($config[$type])) {
            foreach ($config[$type] as $queryClass) {
                $query = new $queryClass();
                if($query instanceof MutationClass) {
                    $name = $query->name();
                    $this->queries[strtolower($name)] = $queryClass;
                }
            }
        }

    }

    public function getQueries(): array
    {
        return $this->queries;
    }

    abstract public function toConfig():array;
}