<?php

namespace App\Repository;

use App\Entity\Tablet1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tablet1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tablet1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tablet1[]    findAll()
 * @method Tablet1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Tablet1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tablet1::class);
    }

    // /**
    //  * @return Tablet1[] Returns an array of Tablet1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tablet1
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
