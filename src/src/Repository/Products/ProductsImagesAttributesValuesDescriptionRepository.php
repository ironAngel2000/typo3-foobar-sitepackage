<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsImagesAttributesValuesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsImagesAttributesValuesDescription>
 *
 * @method ProductsImagesAttributesValuesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsImagesAttributesValuesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsImagesAttributesValuesDescription[]    findAll()
 * @method ProductsImagesAttributesValuesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsImagesAttributesValuesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsImagesAttributesValuesDescription::class);
    }

    public function save(ProductsImagesAttributesValuesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsImagesAttributesValuesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsImagesAttributesValuesDescriptionAssignmentTypes[] Returns an array of ProductsImagesAttributesValuesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsImagesAttributesValuesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}