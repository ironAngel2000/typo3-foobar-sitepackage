<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersHoldStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersHoldStatus>
 *
 * @method OrdersHoldStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersHoldStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersHoldStatus[]    findAll()
 * @method OrdersHoldStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersHoldStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersHoldStatus::class);
    }

    public function save(OrdersHoldStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersHoldStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersHoldStatusAssignmentTypes[] Returns an array of OrdersHoldStatusAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersHoldStatusAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}