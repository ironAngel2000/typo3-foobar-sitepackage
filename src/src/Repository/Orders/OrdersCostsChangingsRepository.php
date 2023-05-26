<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersCostsChangings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersCostsChangings>
 *
 * @method OrdersCostsChangings|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersCostsChangings|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersCostsChangings[]    findAll()
 * @method OrdersCostsChangings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersCostsChangingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersCostsChangings::class);
    }

    public function save(OrdersCostsChangings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersCostsChangings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersCostsChangingsAssignmentTypes[] Returns an array of OrdersCostsChangingsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersCostsChangingsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}