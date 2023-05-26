<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersOrders>
 *
 * @method SuppliersOrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersOrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersOrders[]    findAll()
 * @method SuppliersOrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersOrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersOrders::class);
    }

    public function save(SuppliersOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersOrdersAssignmentTypes[] Returns an array of SuppliersOrdersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersOrdersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}