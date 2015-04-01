<?php

namespace TrainingBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BlogPostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BlogPostRepository extends EntityRepository
{
    public function findAllOrderedByTime()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT bp FROM TrainingBundle:BlogPost bp ORDER BY bp.createdAt'
            )
            ->getResult();
    }
}