<?php
namespace IdeaFlow\AppBundle\Entity\Traits;


/**
 * Class GetCount
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait GetCount
{
    public function getCount()
    {
        $query = $this->createQueryBuilder('e')
            ->select('COUNT(e.id)')
            ->getQuery();

        $total = $query->getSingleScalarResult();

        return $total;
    }
}