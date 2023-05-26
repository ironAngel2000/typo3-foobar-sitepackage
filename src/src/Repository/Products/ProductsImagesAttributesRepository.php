<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsImagesAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsImagesAttributes>
 *
 * @method ProductsImagesAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsImagesAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsImagesAttributes[]    findAll()
 * @method ProductsImagesAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsImagesAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsImagesAttributes::class);
    }

    public function save(ProductsImagesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsImagesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsImagesAttributesAssignmentTypes[] Returns an array of ProductsImagesAttributesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsImagesAttributesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}