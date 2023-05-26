<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsOptionsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsOptionsValues>
 *
 * @method ProductsOptionsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsOptionsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsOptionsValues[]    findAll()
 * @method ProductsOptionsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsOptionsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsOptionsValues::class);
    }

    public function save(ProductsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsOptionsValuesAssignmentTypes[] Returns an array of ProductsOptionsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsOptionsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}