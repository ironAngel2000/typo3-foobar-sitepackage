<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsMatchingLanguages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsMatchingLanguages>
 *
 * @method SuppliersCatalogsMatchingLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsMatchingLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsMatchingLanguages[]    findAll()
 * @method SuppliersCatalogsMatchingLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsMatchingLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsMatchingLanguages::class);
    }

    public function save(SuppliersCatalogsMatchingLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsMatchingLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsMatchingLanguagesAssignmentTypes[] Returns an array of SuppliersCatalogsMatchingLanguagesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsMatchingLanguagesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}