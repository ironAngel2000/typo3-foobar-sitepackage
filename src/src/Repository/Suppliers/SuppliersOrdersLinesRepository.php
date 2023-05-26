<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersOrdersLines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersOrdersLines>
 *
 * @method SuppliersOrdersLines|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersOrdersLines|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersOrdersLines[]    findAll()
 * @method SuppliersOrdersLines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersOrdersLinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersOrdersLines::class);
    }

    public function save(SuppliersOrdersLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersOrdersLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersOrdersLinesAssignmentTypes[] Returns an array of SuppliersOrdersLinesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersOrdersLinesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}