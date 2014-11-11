<?php
require './vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Pimple\Container;

// replace with file to your own project bootstrap
$wise = Herrera\Wise\Wise::create(__DIR__ . '/config');
$config = $wise->load('config.php');

$container = new Container();
$container['application_name'] = 'zaSkeleton';

// replace with mechanism to retrieve EntityManager in your app
$container['manager'] = function ($c) use ($config) {
    return new zaSkeleton\Doctrine\Manager($config['database']);
};


$entityManager = $container->offsetGet('manager');

return ConsoleRunner::createHelperSet($entityManager->getManager());
