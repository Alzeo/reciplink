<?php

namespace App\Repository;

use App\Entity\Recipe;
use App\Entity\RecipeSearch;
use App\Entity\RecipeSearchPlat;
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

    public function findLatestAside() {
        return $this->createQueryBuilder('a')
            ->andWhere('a.publish = true')
            ->setMaxResults(3)
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

    public function findAllPaleoVisibleQuery(RecipeSearchPlat $search): Query
    {

        $query = $this->findPaleoVisibleQuery();

        if($search->getType()){
            $query = $query->andwhere('p.type = :type')
                ->setParameter('type', $search->getType());
        }

        return $query->getQuery();

    }

    public function findAllVeganVisibleQuery(RecipeSearchPlat $search): Query
    {

        $query = $this->findVeganVisibleQuery();

        if($search->getType()){
            $query = $query->andwhere('p.type = :type')
                ->setParameter('type', $search->getType());
        }

        return $query->getQuery();

    }

    public function findAllVegetarienVisibleQuery(RecipeSearchPlat $search): Query
    {

        $query = $this->findVegatarienVisibleQuery();

        if($search->getType()){
            $query = $query->andwhere('p.type = :type')
                ->setParameter('type', $search->getType());
        }

        return $query->getQuery();

    }

    public function findAllVegetalienVisibleQuery(RecipeSearchPlat $search): Query
    {

        $query = $this->findVegetalienVisibleQuery();

        if($search->getType()){
            $query = $query->andwhere('p.type = :type')
                ->setParameter('type', $search->getType());
        }

        return $query->getQuery();

    }

    public function findAllGlutenVisibleQuery(RecipeSearchPlat $search): Query
    {

        $query = $this->findGlutenVisibleQuery();

        if($search->getType()){
            $query = $query->andwhere('p.type = :type')
                ->setParameter('type', $search->getType());
        }

        return $query->getQuery();

    }

    private function findVisibleQuery(): QueryBuilder {
        return $this->createQueryBuilder('p')
            ->where('p.publish = true');
    }

    private function findPaleoVisibleQuery(): QueryBuilder {
        return $this->createQueryBuilder('p')
            ->andWhere('p.publish = true')
            ->andWhere('p.regime = :paleo')
            ->setParameter('paleo', 'Paléo');
    }

    private function findVeganVisibleQuery(): QueryBuilder {
        return $this->createQueryBuilder('p')
            ->andWhere('p.publish = true')
            ->andWhere('p.regime = :vegan')
            ->setParameter('vegan', 'Végan');
    }

    private function findVegatarienVisibleQuery(): QueryBuilder {
        return $this->createQueryBuilder('p')
            ->andWhere('p.publish = true')
            ->andWhere('p.regime = :vegetarien')
            ->setParameter('vegetarien', 'Végétarien');
    }

    private function findVegetalienVisibleQuery(): QueryBuilder {
        return $this->createQueryBuilder('p')
            ->andWhere('p.publish = true')
            ->andWhere('p.regime = :vegetalien')
            ->setParameter('vegetalien', 'Végétalien');
    }


    public function findByLikes($value)
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.love', 'u')
            ->leftJoin('u.users','e')
            ->addSelect('u','e')
            ->where('l.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }



}
