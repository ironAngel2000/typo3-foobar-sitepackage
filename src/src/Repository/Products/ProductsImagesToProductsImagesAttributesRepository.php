<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsImagesToProductsImagesAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsImagesToProductsImagesAttributes>
 *
 * @method ProductsImagesToProductsImagesAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsImagesToProductsImagesAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsImagesToProductsImagesAttributes[]    findAll()
 * @method ProductsImagesToProductsImagesAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsImagesToProductsImagesAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsImagesToProductsImagesAttributes::class);
    }

    public function save(ProductsImagesToProductsImagesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsImagesToProductsImagesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsImagesToProductsImagesAttributesAssignmentTypes[] Returns an array of ProductsImagesToProductsImagesAttributesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsImagesToProductsImagesAttributesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}