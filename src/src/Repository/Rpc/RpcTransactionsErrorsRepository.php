<?php

namespace App\Repository\Rpc;

use App\Entity\Rpc\RpcTransactionsErrors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RpcTransactionsErrors>
 *
 * @method RpcTransactionsErrors|null find($id, $lockMode = null, $lockVersion = null)
 * @method RpcTransactionsErrors|null findOneBy(array $criteria, array $orderBy = null)
 * @method RpcTransactionsErrors[]    findAll()
 * @method RpcTransactionsErrors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RpcTransactionsErrorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RpcTransactionsErrors::class);
    }

    public function save(RpcTransactionsErrors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RpcTransactionsErrors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RpcTransactionsErrorsAssignmentTypes[] Returns an array of RpcTransactionsErrorsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?RpcTransactionsErrorsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}