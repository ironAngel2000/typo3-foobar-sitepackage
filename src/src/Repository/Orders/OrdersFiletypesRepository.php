<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersFiletypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersFiletypes>
 *
 * @method OrdersFiletypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersFiletypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersFiletypes[]    findAll()
 * @method OrdersFiletypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersFiletypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersFiletypes::class);
    }

    public function save(OrdersFiletypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersFiletypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersFiletypesAssignmentTypes[] Returns an array of OrdersFiletypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersFiletypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}