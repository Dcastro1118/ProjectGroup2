<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;


require_once "../../vendor/autoload.php";

class Bootstrap
{

    private static $entityManager = null;


    public static function getEntityManager()
    {

        if (self::$entityManager !== null) {
            return self::$entityManager;
        }

        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . '/../models'],
            isDevMode: true,
        );
        $db = new dbConection();
        $connection = $db->getConnection();

        self::$entityManager = new EntityManager($connection, $config);

        // Retorna el EntityManager para ser utilizado
        return self::$entityManager;
    
    }
}
