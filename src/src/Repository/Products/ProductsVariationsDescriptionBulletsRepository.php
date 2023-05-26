<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsDescriptionBullets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsDescriptionBullets>
 *
 * @method ProductsVariationsDescriptionBullets|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsDescriptionBullets|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsDescriptionBullets[]    findAll()
 * @method ProductsVariationsDescriptionBullets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsDescriptionBulletsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsDescriptionBullets::class);
    }

    public function save(ProductsVariationsDescriptionBullets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsDescriptionBullets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsDescriptionBulletsAssignmentTypes[] Returns an array of ProductsVariationsDescriptionBulletsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsDescriptionBulletsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}