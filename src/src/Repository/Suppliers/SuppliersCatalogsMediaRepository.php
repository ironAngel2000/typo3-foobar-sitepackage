<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsMedia>
 *
 * @method SuppliersCatalogsMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsMedia[]    findAll()
 * @method SuppliersCatalogsMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsMedia::class);
    }

    public function save(SuppliersCatalogsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsMediaAssignmentTypes[] Returns an array of SuppliersCatalogsMediaAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsMediaAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}