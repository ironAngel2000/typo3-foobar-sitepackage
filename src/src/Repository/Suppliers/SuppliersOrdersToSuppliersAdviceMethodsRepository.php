<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersOrdersToSuppliersAdviceMethods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersOrdersToSuppliersAdviceMethods>
 *
 * @method SuppliersOrdersToSuppliersAdviceMethods|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersOrdersToSuppliersAdviceMethods|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersOrdersToSuppliersAdviceMethods[]    findAll()
 * @method SuppliersOrdersToSuppliersAdviceMethods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersOrdersToSuppliersAdviceMethodsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersOrdersToSuppliersAdviceMethods::class);
    }

    public function save(SuppliersOrdersToSuppliersAdviceMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersOrdersToSuppliersAdviceMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersOrdersToSuppliersAdviceMethodsAssignmentTypes[] Returns an array of SuppliersOrdersToSuppliersAdviceMethodsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersOrdersToSuppliersAdviceMethodsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}