<?php

namespace App\Repository;

use App\Entity\Weblink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Weblink|null find($id, $lockMode = null, $lockVersion = null)
 * @method Weblink|null findOneBy(array $criteria, array $orderBy = null)
 * @method Weblink[]    findAll()
 * @method Weblink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeblinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Weblink::class);
    }

    // /**
    //  * @return Weblink[] Returns an array of Weblink objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Weblink
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
