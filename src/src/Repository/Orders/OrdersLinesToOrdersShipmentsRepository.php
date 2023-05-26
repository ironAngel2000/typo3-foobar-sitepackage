<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersLinesToOrdersShipments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersLinesToOrdersShipments>
 *
 * @method OrdersLinesToOrdersShipments|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersLinesToOrdersShipments|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersLinesToOrdersShipments[]    findAll()
 * @method OrdersLinesToOrdersShipments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersLinesToOrdersShipmentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersLinesToOrdersShipments::class);
    }

    public function save(OrdersLinesToOrdersShipments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersLinesToOrdersShipments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersLinesToOrdersShipmentsAssignmentTypes[] Returns an array of OrdersLinesToOrdersShipmentsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersLinesToOrdersShipmentsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}