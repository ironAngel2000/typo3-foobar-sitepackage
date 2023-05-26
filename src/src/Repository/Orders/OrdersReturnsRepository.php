<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersReturns;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersReturns>
 *
 * @method OrdersReturns|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersReturns|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersReturns[]    findAll()
 * @method OrdersReturns[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersReturnsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersReturns::class);
    }

    public function save(OrdersReturns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersReturns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersReturnsAssignmentTypes[] Returns an array of OrdersReturnsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersReturnsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}