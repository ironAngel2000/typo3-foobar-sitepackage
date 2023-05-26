<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersPaymentsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersPaymentsHistory>
 *
 * @method OrdersPaymentsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersPaymentsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersPaymentsHistory[]    findAll()
 * @method OrdersPaymentsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersPaymentsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersPaymentsHistory::class);
    }

    public function save(OrdersPaymentsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersPaymentsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersPaymentsHistoryAssignmentTypes[] Returns an array of OrdersPaymentsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersPaymentsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}