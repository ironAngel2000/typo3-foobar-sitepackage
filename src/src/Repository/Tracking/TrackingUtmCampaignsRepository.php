<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingUtmCampaigns;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingUtmCampaigns>
 *
 * @method TrackingUtmCampaigns|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingUtmCampaigns|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingUtmCampaigns[]    findAll()
 * @method TrackingUtmCampaigns[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingUtmCampaignsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingUtmCampaigns::class);
    }

    public function save(TrackingUtmCampaigns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingUtmCampaigns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingUtmCampaignsAssignmentTypes[] Returns an array of TrackingUtmCampaignsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingUtmCampaignsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}