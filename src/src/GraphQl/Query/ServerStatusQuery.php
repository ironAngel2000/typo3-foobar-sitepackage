<?php

namespace App\GraphQl\Query;

use App\GraphQl\System\QueryClass;
use App\GraphQl\Type\StatusType;

class ServerStatusQuery extends QueryClass
{
    protected string $name = 'ServerStatus';

    public function __construct()
    {
        $this->responseType = StatusType::class;
        $this->args = [];
        parent::__construct();
    }


    protected function resolve(array $args = [])
    {
        return ['status' => 'online'];
    }
}
