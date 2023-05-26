<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsTimeControlledPrices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsTimeControlledPrices>
 *
 * @method ProductsVariationsTimeControlledPrices|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsTimeControlledPrices|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsTimeControlledPrices[]    findAll()
 * @method ProductsVariationsTimeControlledPrices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsTimeControlledPricesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsTimeControlledPrices::class);
    }

    public function save(ProductsVariationsTimeControlledPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsTimeControlledPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsTimeControlledPricesAssignmentTypes[] Returns an array of ProductsVariationsTimeControlledPricesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsTimeControlledPricesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}