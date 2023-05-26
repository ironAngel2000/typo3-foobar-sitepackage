<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsCategoriesGroupsFilters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsCategoriesGroupsFilters>
 *
 * @method ShopsCategoriesGroupsFilters|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsCategoriesGroupsFilters|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsCategoriesGroupsFilters[]    findAll()
 * @method ShopsCategoriesGroupsFilters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsCategoriesGroupsFiltersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsCategoriesGroupsFilters::class);
    }

    public function save(ShopsCategoriesGroupsFilters $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsCategoriesGroupsFilters $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsCategoriesGroupsFiltersAssignmentTypes[] Returns an array of ShopsCategoriesGroupsFiltersAssignmentTypes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ShopsCategoriesGroupsFiltersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}