<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsStock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsStock>
 *
 * @method ProductsVariationsStock|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsStock|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsStock[]    findAll()
 * @method ProductsVariationsStock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsStockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsStock::class);
    }

    public function save(ProductsVariationsStock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsStock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsStockAssignmentTypes[] Returns an array of ProductsVariationsStockAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsStockAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}