<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

/**
 * Class PaginatableEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait PaginatableEntity
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="paginatable", type="boolean", nullable=true)
     */
    protected $paginatable;

    /**
     * @param boolean $paginatable
     */
    public function setPaginatable($paginatable)
    {
        $this->paginatable = $paginatable;
    }

    /**
     * @return boolean
     */
    public function getPaginatable()
    {
        return $this->paginatable;
    }



}