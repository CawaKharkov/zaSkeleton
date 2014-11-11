<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * Class TaggedEntity
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait TaggedEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     * @Assert\NotBlank
     */
    protected $tags;

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function explodeTags()
    {
        return explode(',',$this->getTags());
    }


}