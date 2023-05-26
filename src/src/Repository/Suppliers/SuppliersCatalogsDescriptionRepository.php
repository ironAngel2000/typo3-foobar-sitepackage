<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsDescription>
 *
 * @method SuppliersCatalogsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsDescription[]    findAll()
 * @method SuppliersCatalogsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsDescription::class);
    }

    public function save(SuppliersCatalogsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsDescriptionAssignmentTypes[] Returns an array of SuppliersCatalogsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}