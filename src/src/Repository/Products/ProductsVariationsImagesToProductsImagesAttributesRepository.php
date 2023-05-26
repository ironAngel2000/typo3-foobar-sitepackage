<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsImagesToProductsImagesAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsImagesToProductsImagesAttributes>
 *
 * @method ProductsVariationsImagesToProductsImagesAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsImagesToProductsImagesAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsImagesToProductsImagesAttributes[]    findAll()
 * @method ProductsVariationsImagesToProductsImagesAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsImagesToProductsImagesAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsImagesToProductsImagesAttributes::class);
    }

    public function save(ProductsVariationsImagesToProductsImagesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsImagesToProductsImagesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsImagesToProductsImagesAttributesAssignmentTypes[] Returns an array of ProductsVariationsImagesToProductsImagesAttributesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsImagesToProductsImagesAttributesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}