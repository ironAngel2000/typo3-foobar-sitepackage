<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsDiffsOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsDiffsOptions>
 *
 * @method ProductsVariationsDiffsOptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsDiffsOptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsDiffsOptions[]    findAll()
 * @method ProductsVariationsDiffsOptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsDiffsOptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsDiffsOptions::class);
    }

    public function save(ProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsDiffsOptionsAssignmentTypes[] Returns an array of ProductsVariationsDiffsOptionsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsDiffsOptionsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}