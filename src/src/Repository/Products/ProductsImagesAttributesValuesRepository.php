<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsImagesAttributesValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsImagesAttributesValues>
 *
 * @method ProductsImagesAttributesValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsImagesAttributesValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsImagesAttributesValues[]    findAll()
 * @method ProductsImagesAttributesValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsImagesAttributesValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsImagesAttributesValues::class);
    }

    public function save(ProductsImagesAttributesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsImagesAttributesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsImagesAttributesValuesAssignmentTypes[] Returns an array of ProductsImagesAttributesValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsImagesAttributesValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}