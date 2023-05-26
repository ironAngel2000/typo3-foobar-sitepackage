<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersLinesToOrdersReturns;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersLinesToOrdersReturns>
 *
 * @method OrdersLinesToOrdersReturns|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersLinesToOrdersReturns|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersLinesToOrdersReturns[]    findAll()
 * @method OrdersLinesToOrdersReturns[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersLinesToOrdersReturnsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersLinesToOrdersReturns::class);
    }

    public function save(OrdersLinesToOrdersReturns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersLinesToOrdersReturns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersLinesToOrdersReturnsAssignmentTypes[] Returns an array of OrdersLinesToOrdersReturnsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersLinesToOrdersReturnsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}