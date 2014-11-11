<?php
namespace IdeaFlow\AppBundle\Entity\Traits;

/**
 * Class FindAll
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait FindAll
{
    public function findAll()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p');

        return $qb->getQuery()->getResult();
    }

    public function findAllArray()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p');

        return $qb->getQuery()->getArrayResult();
    }
}