<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsOrdersExportsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsOrdersExportsHistory>
 *
 * @method ErpSystemsOrdersExportsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsOrdersExportsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsOrdersExportsHistory[]    findAll()
 * @method ErpSystemsOrdersExportsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsOrdersExportsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsOrdersExportsHistory::class);
    }

    public function save(ErpSystemsOrdersExportsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsOrdersExportsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsOrdersExportsHistoryAssignmentTypes[] Returns an array of ErpSystemsOrdersExportsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsOrdersExportsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}