<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsAttributesToProductsAttributesSets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsAttributesToProductsAttributesSets>
 *
 * @method ProductsAttributesToProductsAttributesSets|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsAttributesToProductsAttributesSets|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsAttributesToProductsAttributesSets[]    findAll()
 * @method ProductsAttributesToProductsAttributesSets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsAttributesToProductsAttributesSetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsAttributesToProductsAttributesSets::class);
    }

    public function save(ProductsAttributesToProductsAttributesSets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsAttributesToProductsAttributesSets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsAttributesToProductsAttributesSetsAssignmentTypes[] Returns an array of ProductsAttributesToProductsAttributesSetsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsAttributesToProductsAttributesSetsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}