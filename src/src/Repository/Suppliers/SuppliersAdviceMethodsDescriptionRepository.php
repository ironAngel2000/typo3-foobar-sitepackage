<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersAdviceMethodsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersAdviceMethodsDescription>
 *
 * @method SuppliersAdviceMethodsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersAdviceMethodsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersAdviceMethodsDescription[]    findAll()
 * @method SuppliersAdviceMethodsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersAdviceMethodsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersAdviceMethodsDescription::class);
    }

    public function save(SuppliersAdviceMethodsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersAdviceMethodsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersAdviceMethodsDescriptionAssignmentTypes[] Returns an array of SuppliersAdviceMethodsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersAdviceMethodsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}