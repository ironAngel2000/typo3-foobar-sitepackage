<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersPaymentsStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersPaymentsStatus>
 *
 * @method OrdersPaymentsStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersPaymentsStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersPaymentsStatus[]    findAll()
 * @method OrdersPaymentsStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersPaymentsStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersPaymentsStatus::class);
    }

    public function save(OrdersPaymentsStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersPaymentsStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersPaymentsStatusAssignmentTypes[] Returns an array of OrdersPaymentsStatusAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersPaymentsStatusAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}