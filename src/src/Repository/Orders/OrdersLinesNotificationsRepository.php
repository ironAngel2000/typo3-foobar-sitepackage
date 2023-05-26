<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersLinesNotifications;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersLinesNotifications>
 *
 * @method OrdersLinesNotifications|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersLinesNotifications|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersLinesNotifications[]    findAll()
 * @method OrdersLinesNotifications[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersLinesNotificationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersLinesNotifications::class);
    }

    public function save(OrdersLinesNotifications $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersLinesNotifications $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersLinesNotificationsAssignmentTypes[] Returns an array of OrdersLinesNotificationsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersLinesNotificationsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}