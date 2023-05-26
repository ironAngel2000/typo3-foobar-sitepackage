<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingUtmContents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingUtmContents>
 *
 * @method TrackingUtmContents|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingUtmContents|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingUtmContents[]    findAll()
 * @method TrackingUtmContents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingUtmContentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingUtmContents::class);
    }

    public function save(TrackingUtmContents $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingUtmContents $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingUtmContentsAssignmentTypes[] Returns an array of TrackingUtmContentsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingUtmContentsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}