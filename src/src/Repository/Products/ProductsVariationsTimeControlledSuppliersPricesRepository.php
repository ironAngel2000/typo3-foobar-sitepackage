<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsTimeControlledSuppliersPrices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsTimeControlledSuppliersPrices>
 *
 * @method ProductsVariationsTimeControlledSuppliersPrices|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsTimeControlledSuppliersPrices|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsTimeControlledSuppliersPrices[]    findAll()
 * @method ProductsVariationsTimeControlledSuppliersPrices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsTimeControlledSuppliersPricesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsTimeControlledSuppliersPrices::class);
    }

    public function save(ProductsVariationsTimeControlledSuppliersPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsTimeControlledSuppliersPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsTimeControlledSuppliersPricesAssignmentTypes[] Returns an array of ProductsVariationsTimeControlledSuppliersPricesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsTimeControlledSuppliersPricesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}