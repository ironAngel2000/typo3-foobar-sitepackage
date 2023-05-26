<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsMedia>
 *
 * @method ProductsVariationsMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsMedia[]    findAll()
 * @method ProductsVariationsMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsMedia::class);
    }

    public function save(ProductsVariationsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsMediaAssignmentTypes[] Returns an array of ProductsVariationsMediaAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsMediaAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}