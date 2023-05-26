<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingAnalytics;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingAnalytics>
 *
 * @method TrackingAnalytics|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingAnalytics|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingAnalytics[]    findAll()
 * @method TrackingAnalytics[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingAnalyticsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingAnalytics::class);
    }

    public function save(TrackingAnalytics $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingAnalytics $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingAnalyticsAssignmentTypes[] Returns an array of TrackingAnalyticsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingAnalyticsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}