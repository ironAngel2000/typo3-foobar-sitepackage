<?php

namespace App\Repository\Rpc;

use App\Entity\Rpc\RpcErrors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RpcErrors>
 *
 * @method RpcErrors|null find($id, $lockMode = null, $lockVersion = null)
 * @method RpcErrors|null findOneBy(array $criteria, array $orderBy = null)
 * @method RpcErrors[]    findAll()
 * @method RpcErrors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RpcErrorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RpcErrors::class);
    }

    public function save(RpcErrors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RpcErrors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RpcErrorsAssignmentTypes[] Returns an array of RpcErrorsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?RpcErrorsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}