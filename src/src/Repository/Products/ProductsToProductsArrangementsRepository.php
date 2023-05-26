<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsToProductsArrangements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsToProductsArrangements>
 *
 * @method ProductsToProductsArrangements|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsToProductsArrangements|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsToProductsArrangements[]    findAll()
 * @method ProductsToProductsArrangements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsToProductsArrangementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsToProductsArrangements::class);
    }

    public function save(ProductsToProductsArrangements $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsToProductsArrangements $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsToProductsArrangementsAssignmentTypes[] Returns an array of ProductsToProductsArrangementsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsToProductsArrangementsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}