<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingGoals;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingGoals>
 *
 * @method TrackingGoals|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingGoals|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingGoals[]    findAll()
 * @method TrackingGoals[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingGoalsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingGoals::class);
    }

    public function save(TrackingGoals $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingGoals $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingGoalsAssignmentTypes[] Returns an array of TrackingGoalsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingGoalsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}