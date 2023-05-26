<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersToSuppliersGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersToSuppliersGroups>
 *
 * @method SuppliersToSuppliersGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersToSuppliersGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersToSuppliersGroups[]    findAll()
 * @method SuppliersToSuppliersGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersToSuppliersGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersToSuppliersGroups::class);
    }

    public function save(SuppliersToSuppliersGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersToSuppliersGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersToSuppliersGroupsAssignmentTypes[] Returns an array of SuppliersToSuppliersGroupsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersToSuppliersGroupsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}