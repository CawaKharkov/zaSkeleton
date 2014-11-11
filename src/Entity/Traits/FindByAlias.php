<?php

namespace IdeaFlow\AppBundle\Entity\Traits;

use Doctrine\ORM\Query\Expr;

/**
 * Class FindByAlias
 * @package IdeaFlow\AppBundle\Entity\Traits
 */
trait FindByAlias
{

    public function findByAlias($alias)
    {
        $expr = new Expr();
        $qb = $this->createQueryBuilder('p')// алиас для текущей сущности
        ->select([
                'p', // выбрать полностью сущность p
                'a', // и сущность a
            ]);
        $qb->join('p.alias', 'a')// Связанная сущность Alias с псевдонимом a
        ->where(
            $expr->eq('a.alias', ':alias') // где поле alias равно :alias
        )
            ->setParameter('alias', $alias); // биндинг переменной


        return $qb->getQuery()->getSingleResult();
    }

} 