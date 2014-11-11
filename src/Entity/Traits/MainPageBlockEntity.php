<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

/**
 * Class MainPageBlockEntity
 * @package VswSystem\CmsBundle\Entity\Traits
 */
trait MainPageBlockEntity
{

    /**
     * @var integer
     *
     * @ORM\Column(name="mainPageBlock", type="smallint")
     */
    protected $mainPageBlock = 0;
    protected static $mainPageBlocks = [0 => 'DONORYSTĖS PROCEDŪRA', 3 => 'DUOTI KRAUJO NESKAUDA'];

    /**
     * @return int
     */
    public function getMainPageBlock()
    {
        return $this->mainPageBlock;
    }

    /**
     * @param int $mainPageBlock
     */
    public function setMainPageBlock($mainPageBlock)
    {
        $this->mainPageBlock = $mainPageBlock;
    }

    /**
     * @return array
     */
    public static function getMainPageBlocks()
    {
        return self::$mainPageBlocks;
    }


}