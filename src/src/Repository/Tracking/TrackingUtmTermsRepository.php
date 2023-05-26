<?php

namespace App\Repository\Tracking;

use App\Entity\Tracking\TrackingUtmTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrackingUtmTerms>
 *
 * @method TrackingUtmTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingUtmTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingUtmTerms[]    findAll()
 * @method TrackingUtmTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingUtmTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingUtmTerms::class);
    }

    public function save(TrackingUtmTerms $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrackingUtmTerms $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrackingUtmTermsAssignmentTypes[] Returns an array of TrackingUtmTermsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TrackingUtmTermsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}