<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsToProductsArrangementsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsToProductsArrangementsDescription>
 *
 * @method ProductsToProductsArrangementsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsToProductsArrangementsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsToProductsArrangementsDescription[]    findAll()
 * @method ProductsToProductsArrangementsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsToProductsArrangementsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsToProductsArrangementsDescription::class);
    }

    public function save(ProductsToProductsArrangementsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsToProductsArrangementsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsToProductsArrangementsDescriptionAssignmentTypes[] Returns an array of ProductsToProductsArrangementsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsToProductsArrangementsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}