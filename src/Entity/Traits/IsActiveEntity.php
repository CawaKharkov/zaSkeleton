<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

/**
 * Class IsActiveEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait IsActiveEntity
{
    /**
     * @var boolean
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive = 0;

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }




}