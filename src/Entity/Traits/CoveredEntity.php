<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

/**
 * Class CoveredEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait CoveredEntity
{
    //protected $cover;

    /**
     * @return mixed
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param mixed $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }


} 