<?php

namespace App\Repository;

use App\Entity\BLogpost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BLogpost|null find($id, $lockMode = null, $lockVersion = null)
 * @method BLogpost|null findOneBy(array $criteria, array $orderBy = null)
 * @method BLogpost[]    findAll()
 * @method BLogpost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BLogpostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BLogpost::class);
    }

    // /**
    //  * @return BLogpost[] Returns an array of BLogpost objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BLogpost
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
