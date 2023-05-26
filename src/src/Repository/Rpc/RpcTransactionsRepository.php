<?php

namespace App\Repository\Rpc;

use App\Entity\Rpc\RpcTransactions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RpcTransactions>
 *
 * @method RpcTransactions|null find($id, $lockMode = null, $lockVersion = null)
 * @method RpcTransactions|null findOneBy(array $criteria, array $orderBy = null)
 * @method RpcTransactions[]    findAll()
 * @method RpcTransactions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RpcTransactionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RpcTransactions::class);
    }

    public function save(RpcTransactions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RpcTransactions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RpcTransactionsAssignmentTypes[] Returns an array of RpcTransactionsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?RpcTransactionsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}