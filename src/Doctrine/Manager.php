<?php

namespace zaSkeleton\Doctrine;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

/**
 * Doctrine manager class
 *
 * @author cawa
 */
class Manager
{
    protected $em;
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;


        $paths = array(__DIR__.'/../Entity/');
        $isDevMode = false;

// the connection configuration
        $dbParams = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => 'cawa123azs',
            'dbname' => 'zaSkeleton',
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $this->em = EntityManager::create($dbParams, $config);

    }


    public function getManager()
    {
        return $this->em;
    }
}
