<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsDescriptionBullets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsDescriptionBullets>
 *
 * @method ProductsDescriptionBullets|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsDescriptionBullets|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsDescriptionBullets[]    findAll()
 * @method ProductsDescriptionBullets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsDescriptionBulletsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsDescriptionBullets::class);
    }

    public function save(ProductsDescriptionBullets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsDescriptionBullets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsDescriptionBulletsAssignmentTypes[] Returns an array of ProductsDescriptionBulletsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsDescriptionBulletsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}