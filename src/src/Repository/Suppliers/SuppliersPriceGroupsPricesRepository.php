<?php

namespace App\Repository\Suppliers;

use App\Entity\Suppliers\SuppliersPriceGroupsPrices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppliersPriceGroupsPrices>
 *
 * @method SuppliersPriceGroupsPrices|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppliersPriceGroupsPrices|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppliersPriceGroupsPrices[]    findAll()
 * @method SuppliersPriceGroupsPrices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppliersPriceGroupsPricesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppliersPriceGroupsPrices::class);
    }

    public function save(SuppliersPriceGroupsPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppliersPriceGroupsPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SuppliersPriceGroupsPricesAssignmentTypes[] Returns an array of SuppliersPriceGroupsPricesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?SuppliersPriceGroupsPricesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}