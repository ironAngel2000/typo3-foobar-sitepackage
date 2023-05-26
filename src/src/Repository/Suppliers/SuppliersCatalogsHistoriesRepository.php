<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsHistories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsHistories>
 *
 * @method SuppliersCatalogsHistories|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsHistories|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsHistories[]    findAll()
 * @method SuppliersCatalogsHistories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsHistoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsHistories::class);
    }

    public function save(SuppliersCatalogsHistories $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsHistories $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsHistoriesAssignmentTypes[] Returns an array of SuppliersCatalogsHistoriesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsHistoriesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}