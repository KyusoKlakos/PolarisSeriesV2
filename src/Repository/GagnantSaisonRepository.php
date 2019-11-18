<?php

namespace App\Repository;

use App\Entity\GagnantSaison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GagnantSaison|null find($id, $lockMode = null, $lockVersion = null)
 * @method GagnantSaison|null findOneBy(array $criteria, array $orderBy = null)
 * @method GagnantSaison[]    findAll()
 * @method GagnantSaison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GagnantSaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GagnantSaison::class);
    }

    // /**
    //  * @return GagnantSaison[] Returns an array of GagnantSaison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GagnantSaison
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
