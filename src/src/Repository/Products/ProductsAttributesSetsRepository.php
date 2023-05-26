<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsAttributesSets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsAttributesSets>
 *
 * @method ProductsAttributesSets|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsAttributesSets|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsAttributesSets[]    findAll()
 * @method ProductsAttributesSets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsAttributesSetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsAttributesSets::class);
    }

    public function save(ProductsAttributesSets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsAttributesSets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsAttributesSetsAssignmentTypes[] Returns an array of ProductsAttributesSetsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsAttributesSetsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}