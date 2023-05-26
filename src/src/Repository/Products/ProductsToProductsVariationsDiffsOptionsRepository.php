<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsToProductsVariationsDiffsOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsToProductsVariationsDiffsOptions>
 *
 * @method ProductsToProductsVariationsDiffsOptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsToProductsVariationsDiffsOptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsToProductsVariationsDiffsOptions[]    findAll()
 * @method ProductsToProductsVariationsDiffsOptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsToProductsVariationsDiffsOptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsToProductsVariationsDiffsOptions::class);
    }

    public function save(ProductsToProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsToProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsToProductsVariationsDiffsOptionsAssignmentTypes[] Returns an array of ProductsToProductsVariationsDiffsOptionsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsToProductsVariationsDiffsOptionsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}