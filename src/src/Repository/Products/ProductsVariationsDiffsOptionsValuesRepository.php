<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsDiffsOptionsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsDiffsOptionsValues>
 *
 * @method ProductsVariationsDiffsOptionsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsDiffsOptionsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsDiffsOptionsValues[]    findAll()
 * @method ProductsVariationsDiffsOptionsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsDiffsOptionsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsDiffsOptionsValues::class);
    }

    public function save(ProductsVariationsDiffsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsDiffsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsDiffsOptionsValuesAssignmentTypes[] Returns an array of ProductsVariationsDiffsOptionsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsDiffsOptionsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}