<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsAdditionalsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsAdditionalsDescription>
 *
 * @method SuppliersCatalogsAdditionalsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsAdditionalsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsAdditionalsDescription[]    findAll()
 * @method SuppliersCatalogsAdditionalsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsAdditionalsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsAdditionalsDescription::class);
    }

    public function save(SuppliersCatalogsAdditionalsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsAdditionalsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsAdditionalsDescriptionAssignmentTypes[] Returns an array of SuppliersCatalogsAdditionalsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsAdditionalsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}