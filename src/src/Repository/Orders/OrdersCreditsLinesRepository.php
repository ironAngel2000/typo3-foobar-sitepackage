<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersCreditsLines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersCreditsLines>
 *
 * @method OrdersCreditsLines|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersCreditsLines|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersCreditsLines[]    findAll()
 * @method OrdersCreditsLines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersCreditsLinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersCreditsLines::class);
    }

    public function save(OrdersCreditsLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersCreditsLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersCreditsLinesAssignmentTypes[] Returns an array of OrdersCreditsLinesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersCreditsLinesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}