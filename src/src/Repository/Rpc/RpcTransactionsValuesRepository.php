<?php

namespace App\Repository\Rpc;

use App\Entity\Rpc\RpcTransactionsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RpcTransactionsValues>
 *
 * @method RpcTransactionsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method RpcTransactionsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method RpcTransactionsValues[]    findAll()
 * @method RpcTransactionsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RpcTransactionsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RpcTransactionsValues::class);
    }

    public function save(RpcTransactionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RpcTransactionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RpcTransactionsValuesAssignmentTypes[] Returns an array of RpcTransactionsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?RpcTransactionsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}