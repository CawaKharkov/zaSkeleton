<?php

namespace zaSkeleton\Entity\Traits;


/**
 * Class NamedEntity
 * @package zaSkeleton\Entity\Traits
 */
trait NamedEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    protected $name;


    /**
     * Set name
     *
     * @param string $name
     * @return File
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}