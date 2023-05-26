<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersPaymentsMethodsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersPaymentsMethodsValues>
 *
 * @method OrdersPaymentsMethodsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersPaymentsMethodsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersPaymentsMethodsValues[]    findAll()
 * @method OrdersPaymentsMethodsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersPaymentsMethodsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersPaymentsMethodsValues::class);
    }

    public function save(OrdersPaymentsMethodsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersPaymentsMethodsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersPaymentsMethodsValuesAssignmentTypes[] Returns an array of OrdersPaymentsMethodsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersPaymentsMethodsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}