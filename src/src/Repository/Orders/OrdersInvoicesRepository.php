<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersInvoices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersInvoices>
 *
 * @method OrdersInvoices|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersInvoices|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersInvoices[]    findAll()
 * @method OrdersInvoices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersInvoicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersInvoices::class);
    }

    public function save(OrdersInvoices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersInvoices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersInvoicesAssignmentTypes[] Returns an array of OrdersInvoicesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersInvoicesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}