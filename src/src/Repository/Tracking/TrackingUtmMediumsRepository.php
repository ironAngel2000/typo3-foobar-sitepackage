<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingUtmMediums;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingUtmMediums>
 *
 * @method TrackingUtmMediums|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingUtmMediums|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingUtmMediums[]    findAll()
 * @method TrackingUtmMediums[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingUtmMediumsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingUtmMediums::class);
    }

    public function save(TrackingUtmMediums $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingUtmMediums $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingUtmMediumsAssignmentTypes[] Returns an array of TrackingUtmMediumsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingUtmMediumsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}