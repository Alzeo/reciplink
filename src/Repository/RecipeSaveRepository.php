<?php

namespace App\Repository;

use App\Entity\RecipeSave;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RecipeSave|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecipeSave|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecipeSave[]    findAll()
 * @method RecipeSave[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeSaveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecipeSave::class);
    }

    // /**
    //  * @return RecipeSave[] Returns an array of RecipeSave objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RecipeSave
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
