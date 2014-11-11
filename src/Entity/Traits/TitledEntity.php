<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TitledEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait TitledEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     * @Assert\NotBlank
     */
    protected $title;

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


}