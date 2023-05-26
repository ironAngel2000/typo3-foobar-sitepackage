<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsCombinationsMovementHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsCombinationsMovementHistory>
 *
 * @method ProductsVariationsCombinationsMovementHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsCombinationsMovementHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsCombinationsMovementHistory[]    findAll()
 * @method ProductsVariationsCombinationsMovementHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsCombinationsMovementHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsCombinationsMovementHistory::class);
    }

    public function save(ProductsVariationsCombinationsMovementHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsCombinationsMovementHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsCombinationsMovementHistoryAssignmentTypes[] Returns an array of ProductsVariationsCombinationsMovementHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsCombinationsMovementHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}