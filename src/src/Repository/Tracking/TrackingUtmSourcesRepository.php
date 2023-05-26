<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingUtmSources;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingUtmSources>
 *
 * @method TrackingUtmSources|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingUtmSources|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingUtmSources[]    findAll()
 * @method TrackingUtmSources[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingUtmSourcesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingUtmSources::class);
    }

    public function save(TrackingUtmSources $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingUtmSources $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingUtmSourcesAssignmentTypes[] Returns an array of TrackingUtmSourcesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingUtmSourcesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}