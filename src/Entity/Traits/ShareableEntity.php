<?php

namespace IdeaFlow\AppBundle\Entity\Traits;


/**
 * Class ShareableEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait ShareableEntity
{
    /**
     * @var integer
     * @ORM\Column(name="shareable", type="boolean")
     */
    protected $shareable = 0;

    /**
     * @param int $shareable
     */
    public function setShareable($shareable)
    {
        $this->shareable = $shareable;
    }

    /**
     * @return int
     */
    public function getShareable()
    {
        return $this->shareable;
    }



}