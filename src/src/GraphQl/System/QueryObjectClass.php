<?php

namespace App\GraphQl\System;

use GraphQL\Server\StandardServer;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Introspection;
use GraphQL\Type\Schema;
use GraphQL\Type\SchemaConfig;

abstract class QueryObjectClass
{
    protected string $name = '';
    protected string $responseType;
    protected array $args = [];
    protected string $type;
    protected array $headers = [];

    abstract protected function resolve(array $args = []);

    public function __construct()
    {

    }

    public function setHeader(array $headers = [])
    {
        $this->headers = $headers;
    }

    public function getNativeSchema() : Schema
    {

        $object = $this->getObjectConfig();

        $objConfig = SchemaConfig::create();
        switch ($this->type){
            case 'mutation':
                $objConfig->setMutation($object);
                break;
            case 'query':
                $objConfig->setQuery($object);
                break;
        }

        $objSchema = new Schema($objConfig);
        $objSchema->assertValid();

        return $objSchema;
    }

    public function getObjectConfig(): ObjectType
    {

        return new ObjectType($this->getConfig());
    }

    public function execute()
    {
        if($this->authorization() !== true) {
            user_error('Authorization failed', E_USER_ERROR);
            die();
        }

        $objSchema = $this->getNativeSchema();

        $objServer = new StandardServer(['schema' => $objSchema, 'rootValue' => []]);
        $objServer->handleRequest();
    }

    protected function authorization(): bool
    {
        return true;
    }

    public function name():string
    {
        return $this->name;
    }

    public function responseType():string
    {
        return $this->responseType;
    }

    public function arguments(): array
    {
        return $this->args;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getConfig() {
        return [
            'name' => $this->name,
            'fields' => [
                $this->name => [
                    'type' => Types::type($this->responseType),
                    'args' => $this->args,
                    'resolve' => function($rootValue, array $args): array
                    {
                        return $this->resolve($args);
                    }
                ],
            ],
        ];

    }

    public function introspectionResult()
    {
        return $introspectionResult = Introspection::fromSchema($this->getNativeSchema());
    }

}