<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingMapping;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingMapping>
 *
 * @method TrackingMapping|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingMapping|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingMapping[]    findAll()
 * @method TrackingMapping[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingMappingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingMapping::class);
    }

    public function save(TrackingMapping $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingMapping $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingMappingAssignmentTypes[] Returns an array of TrackingMappingAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingMappingAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}