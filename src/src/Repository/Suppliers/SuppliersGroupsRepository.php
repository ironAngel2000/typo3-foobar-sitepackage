<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersGroups>
 *
 * @method SuppliersGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersGroups[]    findAll()
 * @method SuppliersGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersGroups::class);
    }

    public function save(SuppliersGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersGroupsAssignmentTypes[] Returns an array of SuppliersGroupsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersGroupsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}