<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsProductsVariationsSuppliersExportsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsProductsVariationsSuppliersExportsHistory>
 *
 * @method ErpSystemsProductsVariationsSuppliersExportsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsProductsVariationsSuppliersExportsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsProductsVariationsSuppliersExportsHistory[]    findAll()
 * @method ErpSystemsProductsVariationsSuppliersExportsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsProductsVariationsSuppliersExportsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsProductsVariationsSuppliersExportsHistory::class);
    }

    public function save(ErpSystemsProductsVariationsSuppliersExportsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsProductsVariationsSuppliersExportsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsProductsVariationsSuppliersExportsHistoryAssignmentTypes[] Returns an array of ErpSystemsProductsVariationsSuppliersExportsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsProductsVariationsSuppliersExportsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}