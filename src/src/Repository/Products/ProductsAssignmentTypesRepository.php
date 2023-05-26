<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsAssignmentTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsAssignmentTypes>
 *
 * @method ProductsAssignmentTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsAssignmentTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsAssignmentTypes[]    findAll()
 * @method ProductsAssignmentTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsAssignmentTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsAssignmentTypes::class);
    }

    public function save(ProductsAssignmentTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsAssignmentTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsAssignmentTypesAssignmentTypes[] Returns an array of ProductsAssignmentTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsAssignmentTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}