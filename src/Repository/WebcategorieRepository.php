<?php

namespace App\Repository;

use App\Entity\Webcategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Webcategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Webcategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Webcategorie[]    findAll()
 * @method Webcategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebcategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Webcategorie::class);
    }

    // /**
    //  * @return Webcategorie[] Returns an array of Webcategorie objects
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
    public function findOneBySomeField($value): ?Webcategorie
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
