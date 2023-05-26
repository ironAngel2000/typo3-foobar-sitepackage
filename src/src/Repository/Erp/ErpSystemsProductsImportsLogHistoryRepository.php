<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsProductsImportsLogHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsProductsImportsLogHistory>
 *
 * @method ErpSystemsProductsImportsLogHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsProductsImportsLogHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsProductsImportsLogHistory[]    findAll()
 * @method ErpSystemsProductsImportsLogHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsProductsImportsLogHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsProductsImportsLogHistory::class);
    }

    public function save(ErpSystemsProductsImportsLogHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsProductsImportsLogHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsProductsImportsLogHistoryAssignmentTypes[] Returns an array of ErpSystemsProductsImportsLogHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsProductsImportsLogHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}