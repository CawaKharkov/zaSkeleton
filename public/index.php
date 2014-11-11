<?php

/**
 * zaSkeleton entry point
 */
// autoload via composer. PSR-4 standart
require '../vendor/autoload.php';

$wise = Herrera\Wise\Wise::create(__DIR__ . '/../config');
$config = $wise->load('config.php');

$app = new \zaSkeleton\Application();

$app->run($config);
$app->dispatch($_SERVER['REQUEST_URI']);






//$manager =
//$log = $manager->getRepository('zaSkeleton\Entity\SiteLogEntity')->findAll();

//var_dump($log);

