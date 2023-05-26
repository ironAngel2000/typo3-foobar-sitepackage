<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersInvoicesToOrdersShipments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersInvoicesToOrdersShipments>
 *
 * @method OrdersInvoicesToOrdersShipments|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersInvoicesToOrdersShipments|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersInvoicesToOrdersShipments[]    findAll()
 * @method OrdersInvoicesToOrdersShipments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersInvoicesToOrdersShipmentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersInvoicesToOrdersShipments::class);
    }

    public function save(OrdersInvoicesToOrdersShipments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersInvoicesToOrdersShipments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersInvoicesToOrdersShipmentsAssignmentTypes[] Returns an array of OrdersInvoicesToOrdersShipmentsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersInvoicesToOrdersShipmentsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}