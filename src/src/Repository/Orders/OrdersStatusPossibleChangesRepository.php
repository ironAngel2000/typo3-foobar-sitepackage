<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersStatusPossibleChanges;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersStatusPossibleChanges>
 *
 * @method OrdersStatusPossibleChanges|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersStatusPossibleChanges|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersStatusPossibleChanges[]    findAll()
 * @method OrdersStatusPossibleChanges[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersStatusPossibleChangesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersStatusPossibleChanges::class);
    }

    public function save(OrdersStatusPossibleChanges $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersStatusPossibleChanges $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersStatusPossibleChangesAssignmentTypes[] Returns an array of OrdersStatusPossibleChangesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersStatusPossibleChangesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}