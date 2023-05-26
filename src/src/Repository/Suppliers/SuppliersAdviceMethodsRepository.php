<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersAdviceMethods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersAdviceMethods>
 *
 * @method SuppliersAdviceMethods|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersAdviceMethods|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersAdviceMethods[]    findAll()
 * @method SuppliersAdviceMethods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersAdviceMethodsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersAdviceMethods::class);
    }

    public function save(SuppliersAdviceMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersAdviceMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersAdviceMethodsAssignmentTypes[] Returns an array of SuppliersAdviceMethodsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersAdviceMethodsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}