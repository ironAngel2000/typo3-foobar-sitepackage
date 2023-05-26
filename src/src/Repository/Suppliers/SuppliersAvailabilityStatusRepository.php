<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersAvailabilityStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersAvailabilityStatus>
 *
 * @method SuppliersAvailabilityStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersAvailabilityStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersAvailabilityStatus[]    findAll()
 * @method SuppliersAvailabilityStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersAvailabilityStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersAvailabilityStatus::class);
    }

    public function save(SuppliersAvailabilityStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersAvailabilityStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersAvailabilityStatusAssignmentTypes[] Returns an array of SuppliersAvailabilityStatusAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersAvailabilityStatusAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}