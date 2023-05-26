<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersToSuppliersAdviceMethods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersToSuppliersAdviceMethods>
 *
 * @method SuppliersToSuppliersAdviceMethods|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersToSuppliersAdviceMethods|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersToSuppliersAdviceMethods[]    findAll()
 * @method SuppliersToSuppliersAdviceMethods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersToSuppliersAdviceMethodsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersToSuppliersAdviceMethods::class);
    }

    public function save(SuppliersToSuppliersAdviceMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersToSuppliersAdviceMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersToSuppliersAdviceMethodsAssignmentTypes[] Returns an array of SuppliersToSuppliersAdviceMethodsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersToSuppliersAdviceMethodsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}