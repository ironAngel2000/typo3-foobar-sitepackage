<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsMatchingMediaTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsMatchingMediaTypes>
 *
 * @method SuppliersCatalogsMatchingMediaTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsMatchingMediaTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsMatchingMediaTypes[]    findAll()
 * @method SuppliersCatalogsMatchingMediaTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsMatchingMediaTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsMatchingMediaTypes::class);
    }

    public function save(SuppliersCatalogsMatchingMediaTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsMatchingMediaTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsMatchingMediaTypesAssignmentTypes[] Returns an array of SuppliersCatalogsMatchingMediaTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsMatchingMediaTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}