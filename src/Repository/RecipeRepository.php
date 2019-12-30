<?php

namespace App\Repository;

use App\Entity\Recipe;
use App\Entity\RecipeSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Recipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recipe[]    findAll()
 * @method Recipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recipe::class);
    }

    /**
     * @return Recipe[]
     */
    public function findLatest() {
        return $this->createQueryBuilder('a')
            ->andWhere('a.publish = true')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();
    }



    public function findAllVisibleQuery(RecipeSearch $search): Query
    {

        $query = $this->findVisibleQuery();

        if($search->getType()){
            $query = $query->andwhere('p.type = :type')
                ->setParameter('type', $search->getType());
        }

        if($search->getRegime()){
            $query = $query->andwhere('p.regime = :regime')
                ->setParameter('regime', $search->getRegime());
        }

        return $query->getQuery();

    }

    private function findVisibleQuery(): QueryBuilder {
        return $this->createQueryBuilder('p')
            ->where('p.publish = true');
    }




}
