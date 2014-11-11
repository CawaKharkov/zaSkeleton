<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

/**
 * Class MainPageEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait MainPageEntity
{

    /**
     * @var integer
     * @ORM\Column(name="isMainPage", type="boolean")
     */
    protected $isMainPage;



    /**
     * @return int
     */
    public function getIsMainPage()
    {
        return $this->isMainPage;
    }

    /**
     * @param int $isMainPage
     */
    public function setIsMainPage($isMainPage)
    {
        $this->isMainPage = $isMainPage;
    }





} 