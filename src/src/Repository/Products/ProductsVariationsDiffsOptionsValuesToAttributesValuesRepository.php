<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsDiffsOptionsValuesToAttributesValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsDiffsOptionsValuesToAttributesValues>
 *
 * @method ProductsVariationsDiffsOptionsValuesToAttributesValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsDiffsOptionsValuesToAttributesValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsDiffsOptionsValuesToAttributesValues[]    findAll()
 * @method ProductsVariationsDiffsOptionsValuesToAttributesValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsDiffsOptionsValuesToAttributesValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsDiffsOptionsValuesToAttributesValues::class);
    }

    public function save(ProductsVariationsDiffsOptionsValuesToAttributesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsDiffsOptionsValuesToAttributesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsDiffsOptionsValuesToAttributesValuesAssignmentTypes[] Returns an array of ProductsVariationsDiffsOptionsValuesToAttributesValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsDiffsOptionsValuesToAttributesValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}