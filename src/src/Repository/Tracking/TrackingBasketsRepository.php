<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingBaskets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingBaskets>
 *
 * @method TrackingBaskets|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingBaskets|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingBaskets[]    findAll()
 * @method TrackingBaskets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingBasketsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingBaskets::class);
    }

    public function save(TrackingBaskets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingBaskets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingBasketsAssignmentTypes[] Returns an array of TrackingBasketsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingBasketsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}