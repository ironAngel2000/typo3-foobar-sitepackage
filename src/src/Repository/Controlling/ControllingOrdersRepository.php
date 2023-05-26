<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingOrders>
 *
 * @method ControllingOrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingOrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingOrders[]    findAll()
 * @method ControllingOrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingOrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingOrders::class);
    }

    public function save(ControllingOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingOrdersAssignmentTypes[] Returns an array of ControllingOrdersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingOrdersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}