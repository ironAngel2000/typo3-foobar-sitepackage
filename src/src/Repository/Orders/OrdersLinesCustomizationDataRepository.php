<?php

namespace App\Repository\Orders;

use App\Entity\Orders\OrdersLinesCustomizationData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdersLinesCustomizationData>
 *
 * @method OrdersLinesCustomizationData|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersLinesCustomizationData|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersLinesCustomizationData[]    findAll()
 * @method OrdersLinesCustomizationData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersLinesCustomizationDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersLinesCustomizationData::class);
    }

    public function save(OrdersLinesCustomizationData $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdersLinesCustomizationData $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdersLinesCustomizationDataAssignmentTypes[] Returns an array of OrdersLinesCustomizationDataAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?OrdersLinesCustomizationDataAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}