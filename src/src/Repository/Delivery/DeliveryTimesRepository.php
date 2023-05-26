<?php

namespace App\Repository\Delivery;

use App\Entity\Delivery\DeliveryTimes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeliveryTimes>
 *
 * @method DeliveryTimes|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeliveryTimes|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeliveryTimes[]    findAll()
 * @method DeliveryTimes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeliveryTimesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeliveryTimes::class);
    }

    public function save(DeliveryTimes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DeliveryTimes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DeliveryTimesAssignmentTypes[] Returns an array of DeliveryTimesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?DeliveryTimesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}