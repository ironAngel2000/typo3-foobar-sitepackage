<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersStatusHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersStatusHistory>
 *
 * @method OrdersStatusHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersStatusHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersStatusHistory[]    findAll()
 * @method OrdersStatusHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersStatusHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersStatusHistory::class);
    }

    public function save(OrdersStatusHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersStatusHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersStatusHistoryAssignmentTypes[] Returns an array of OrdersStatusHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersStatusHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}