<?php
/**
 * Created by PhpStorm.
 * User: cawa
 * Date: 27.10.14
 * Time: 23:28
 */

namespace zaSkeleton\Controller;


abstract class AbstractController
{

    protected $serviceContainer;

    public function __construct($serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    protected function getServiceContainer()
    {
        return $this->serviceContainer;
    }

    protected function getManager()
    {
      return  $this->getServiceContainer()->offsetGet('manager')->getManager();

    }


} 