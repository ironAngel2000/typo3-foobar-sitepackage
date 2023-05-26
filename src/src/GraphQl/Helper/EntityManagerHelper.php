<?php

namespace App\GraphQl\Helper;

use Doctrine\ORM\EntityManager;

class EntityManagerHelper
{
    private static EntityManager $entityManager;

    public static function setEntityManager(EntityManager $entityManager)
    {
        self::$entityManager = $entityManager;
    }

    public static function getEntityManager(): EntityManager
    {
        return self::$entityManager;
    }
}