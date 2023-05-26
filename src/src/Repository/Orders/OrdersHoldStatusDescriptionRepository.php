<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersHoldStatusDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersHoldStatusDescription>
 *
 * @method OrdersHoldStatusDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersHoldStatusDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersHoldStatusDescription[]    findAll()
 * @method OrdersHoldStatusDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersHoldStatusDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersHoldStatusDescription::class);
    }

    public function save(OrdersHoldStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersHoldStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersHoldStatusDescriptionAssignmentTypes[] Returns an array of OrdersHoldStatusDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersHoldStatusDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}