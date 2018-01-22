<?php

namespace App\Repository;

use App\Entity\OptieProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class OptieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OptieProduct::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('o')
            ->where('o.something = :value')->setParameter('value', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
