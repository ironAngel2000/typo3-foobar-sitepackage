<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersShipments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersShipments>
 *
 * @method OrdersShipments|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersShipments|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersShipments[]    findAll()
 * @method OrdersShipments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersShipmentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersShipments::class);
    }

    public function save(OrdersShipments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersShipments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersShipmentsAssignmentTypes[] Returns an array of OrdersShipmentsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersShipmentsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}