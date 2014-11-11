<?php

namespace zaSkeleton;

use PHPRouter\Route;
use PHPRouter\RouteCollection;
use PHPRouter\Router;
use Pimple\Container;

/**
 * Main class for zaSkeleton
 *
 * @author cawa
 */
class Application
{
    protected $serviceContainer;

    protected $request;
    protected $response;

    protected $template;

    protected $layout;
    protected $view;

    protected $router;

    protected $config;

    protected $events;

    /**
     * @param mixed $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @param mixed $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * @param mixed $serviceContainer
     */
    public function setServiceContainer($serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    /**
     * @return mixed
     */
    public function getServiceContainer()
    {
        return $this->serviceContainer;
    }



    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @param mixed $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }


    /**
     * @param mixed $router
     */
    public function setRouter($router)
    {
        $this->router = $router;
    }

    public function run($config = null)
    {
        if (!$config) {
            throw new \Exception();
        }

        $container = new Container();
        $container['application_name'] = 'zaSkeleton';
        /**
         * Create Doctrine manager
         * @param \Pimple\Container $c
         * @return \zaSkeleton\Doctrine\Manager
         */
        $container['manager'] = function ($c) use ($config) {
            return new Doctrine\Manager($config['database']);
        };

        $this->setServiceContainer($container);
    }

    public function dispatch($uri)
    {
        $collection = new RouteCollection();

        $collection->attach(new Route('/', array(
            '_controller' => 'zaSkeleton\Controller\IndexController::indexAction',
            'methods' => 'GET'
        )));

        $router = new Router($collection,$this->getServiceContainer());
        $router->setBasePath('/');
        $route = $router->matchCurrentRequest();
        var_dump($route->dispatch());
       // $route->dispatch();
    }

}
