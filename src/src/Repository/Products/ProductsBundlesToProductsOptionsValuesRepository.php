<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsBundlesToProductsOptionsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsBundlesToProductsOptionsValues>
 *
 * @method ProductsBundlesToProductsOptionsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsBundlesToProductsOptionsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsBundlesToProductsOptionsValues[]    findAll()
 * @method ProductsBundlesToProductsOptionsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsBundlesToProductsOptionsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsBundlesToProductsOptionsValues::class);
    }

    public function save(ProductsBundlesToProductsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsBundlesToProductsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsBundlesToProductsOptionsValuesAssignmentTypes[] Returns an array of ProductsBundlesToProductsOptionsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsBundlesToProductsOptionsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}