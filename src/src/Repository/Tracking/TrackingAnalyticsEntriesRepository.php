<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingAnalyticsEntries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingAnalyticsEntries>
 *
 * @method TrackingAnalyticsEntries|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingAnalyticsEntries|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingAnalyticsEntries[]    findAll()
 * @method TrackingAnalyticsEntries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingAnalyticsEntriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingAnalyticsEntries::class);
    }

    public function save(TrackingAnalyticsEntries $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingAnalyticsEntries $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingAnalyticsEntriesAssignmentTypes[] Returns an array of TrackingAnalyticsEntriesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingAnalyticsEntriesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}