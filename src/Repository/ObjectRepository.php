<?php

namespace App\Repository;

use App\Entity\ObjectProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ObjectRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ObjectProduct::class);
    }

    public function getProductPriceById(){
        $em = $this->createQueryBuilder();
    }
}
