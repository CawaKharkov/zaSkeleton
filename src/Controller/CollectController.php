<?php

namespace zaSkeleton\Controller;
use Pimple\Container;

/**
 * Description of IndexController
 *
 * @author cawa
 */
class CollectController extends  AbstractController
{

    /**
     * @Route("/")
     * @Method("GET")
     */
    public function indexAction()
    {
       // $container = new Container();
     //   $container['application_name'] = 'zaSkeleton';

    //    var_dump($container['manager']);
        return ['index', 'content' => __CLASS__.':'. __FUNCTION__];
    }



    /**
     * @Route("/collect/save")
     * @Method("GET")
     */
    public function saveAction()
    {
        die('save data');
    }



}
