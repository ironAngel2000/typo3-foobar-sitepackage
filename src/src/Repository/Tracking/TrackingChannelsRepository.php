<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingChannels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingChannels>
 *
 * @method TrackingChannels|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingChannels|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingChannels[]    findAll()
 * @method TrackingChannels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingChannelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingChannels::class);
    }

    public function save(TrackingChannels $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingChannels $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingChannelsAssignmentTypes[] Returns an array of TrackingChannelsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingChannelsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}