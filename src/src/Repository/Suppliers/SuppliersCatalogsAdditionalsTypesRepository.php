<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersCatalogsAdditionalsTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersCatalogsAdditionalsTypes>
 *
 * @method SuppliersCatalogsAdditionalsTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersCatalogsAdditionalsTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersCatalogsAdditionalsTypes[]    findAll()
 * @method SuppliersCatalogsAdditionalsTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersCatalogsAdditionalsTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersCatalogsAdditionalsTypes::class);
    }

    public function save(SuppliersCatalogsAdditionalsTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersCatalogsAdditionalsTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersCatalogsAdditionalsTypesAssignmentTypes[] Returns an array of SuppliersCatalogsAdditionalsTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersCatalogsAdditionalsTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}