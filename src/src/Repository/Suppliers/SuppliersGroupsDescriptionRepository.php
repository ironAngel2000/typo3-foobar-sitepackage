<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersGroupsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersGroupsDescription>
 *
 * @method SuppliersGroupsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersGroupsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersGroupsDescription[]    findAll()
 * @method SuppliersGroupsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersGroupsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersGroupsDescription::class);
    }

    public function save(SuppliersGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersGroupsDescriptionAssignmentTypes[] Returns an array of SuppliersGroupsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersGroupsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}