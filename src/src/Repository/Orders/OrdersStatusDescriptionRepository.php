<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersStatusDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersStatusDescription>
 *
 * @method OrdersStatusDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersStatusDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersStatusDescription[]    findAll()
 * @method OrdersStatusDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersStatusDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersStatusDescription::class);
    }

    public function save(OrdersStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersStatusDescriptionAssignmentTypes[] Returns an array of OrdersStatusDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersStatusDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}