<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsDiffsOptionsToProductsAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsDiffsOptionsToProductsAttributes>
 *
 * @method ProductsVariationsDiffsOptionsToProductsAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsDiffsOptionsToProductsAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsDiffsOptionsToProductsAttributes[]    findAll()
 * @method ProductsVariationsDiffsOptionsToProductsAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsDiffsOptionsToProductsAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsDiffsOptionsToProductsAttributes::class);
    }

    public function save(ProductsVariationsDiffsOptionsToProductsAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsDiffsOptionsToProductsAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsDiffsOptionsToProductsAttributesAssignmentTypes[] Returns an array of ProductsVariationsDiffsOptionsToProductsAttributesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsDiffsOptionsToProductsAttributesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}