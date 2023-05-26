<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsProductsVariationsExportsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsProductsVariationsExportsHistory>
 *
 * @method ErpSystemsProductsVariationsExportsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsProductsVariationsExportsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsProductsVariationsExportsHistory[]    findAll()
 * @method ErpSystemsProductsVariationsExportsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsProductsVariationsExportsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsProductsVariationsExportsHistory::class);
    }

    public function save(ErpSystemsProductsVariationsExportsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsProductsVariationsExportsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsProductsVariationsExportsHistoryAssignmentTypes[] Returns an array of ErpSystemsProductsVariationsExportsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsProductsVariationsExportsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}