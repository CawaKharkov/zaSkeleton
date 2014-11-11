<?php
namespace IdeaFlow\AppBundle\Entity\Traits;


/**
 * Class FbContentEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait FbContentEntity
{
    /**
     * @var integer
     * @ORM\Column(name="isPosted", type="boolean")
     */
    protected $isPosted;

    /**
     * @param int $isPosted
     */
    public function setIsPosted($isPosted)
    {
        $this->isPosted = $isPosted;
    }

    /**
     * @return int
     */
    public function getIsPosted()
    {
        return $this->isPosted;
    }



}