<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsToProductsOptionsPrices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsToProductsOptionsPrices>
 *
 * @method ProductsToProductsOptionsPrices|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsToProductsOptionsPrices|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsToProductsOptionsPrices[]    findAll()
 * @method ProductsToProductsOptionsPrices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsToProductsOptionsPricesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsToProductsOptionsPrices::class);
    }

    public function save(ProductsToProductsOptionsPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsToProductsOptionsPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsToProductsOptionsPricesAssignmentTypes[] Returns an array of ProductsToProductsOptionsPricesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsToProductsOptionsPricesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}