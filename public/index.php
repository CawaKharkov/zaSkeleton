<?php

/**
 * zaSkeleton entry point
 */
// autoload via composer. PSR-4 standart
require '../vendor/autoload.php';

use Pux\Mux;
use Pux\Executor;

$mux = new Mux;
$mux->any('/', ['zaSkeleton\Controller\IndexController', 'indexAction'], ['id' => 'index']);
$mux->any('/test', ['zaSkeleton\Controller\IndexController', 'testAction']);

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

use Pimple\Container;

$container = new Container();
$container['application_name'] = 'zaSkeleton';

$container['manager'] = function ($c) {
    return new zaSkeleton\Doctrine\Manager();
};


try {
    // Create new Plates engine
    $engine = new \League\Plates\Engine('../view/');
    // Create a new template
    $template = new \League\Plates\Template($engine);

    $response = Executor::execute($route);
    $template->data($response);
    echo $template->render($response[0]);
} catch (\ReflectionException $ex) {
    echo 'Routing error:' . $ex->getMessage();
} catch (\LogicException $ex) {
    echo 'View error:' . $ex->getMessage();
}
