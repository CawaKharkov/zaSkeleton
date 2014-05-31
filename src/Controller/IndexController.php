<?php

namespace zaSkeleton\Controller;

/**
 * Description of IndexController
 *
 * @author cawa
 */
class IndexController
{

    public function indexAction()
    {
        return ['index','content'=>'indexAction'];
    }
    
      public function testAction()
    {
        return ['content'=>'testAction'];
    }

}
