<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsAdditionalsTypesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsAdditionalsTypesDescription>
 *
 * @method SuppliersCatalogsAdditionalsTypesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsAdditionalsTypesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsAdditionalsTypesDescription[]    findAll()
 * @method SuppliersCatalogsAdditionalsTypesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsAdditionalsTypesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsAdditionalsTypesDescription::class);
    }

    public function save(SuppliersCatalogsAdditionalsTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsAdditionalsTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsAdditionalsTypesDescriptionAssignmentTypes[] Returns an array of SuppliersCatalogsAdditionalsTypesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsAdditionalsTypesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}