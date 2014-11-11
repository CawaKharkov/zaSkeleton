<?php

namespace zaSkeleton\Controller;

/**
 * Description of IndexController
 *
 * @author cawa
 */
class IndexController extends AbstractController
{

    public function indexAction()
    {
        return ['index', 'content' => '1'];
    }

    public function testAction()
    {
        $data = ['one', 'second'];
        return ['test', 'content' => compact('data')];
    }

}
