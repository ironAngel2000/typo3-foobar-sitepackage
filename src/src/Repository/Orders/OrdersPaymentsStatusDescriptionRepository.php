<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersPaymentsStatusDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersPaymentsStatusDescription>
 *
 * @method OrdersPaymentsStatusDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersPaymentsStatusDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersPaymentsStatusDescription[]    findAll()
 * @method OrdersPaymentsStatusDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersPaymentsStatusDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersPaymentsStatusDescription::class);
    }

    public function save(OrdersPaymentsStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersPaymentsStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersPaymentsStatusDescriptionAssignmentTypes[] Returns an array of OrdersPaymentsStatusDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersPaymentsStatusDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}