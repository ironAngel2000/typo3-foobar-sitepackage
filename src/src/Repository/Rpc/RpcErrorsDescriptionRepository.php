<?php

namespace App\Repository\Rpc;

use App\Entity\Rpc\RpcErrorsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RpcErrorsDescription>
 *
 * @method RpcErrorsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method RpcErrorsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method RpcErrorsDescription[]    findAll()
 * @method RpcErrorsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RpcErrorsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RpcErrorsDescription::class);
    }

    public function save(RpcErrorsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RpcErrorsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RpcErrorsDescriptionAssignmentTypes[] Returns an array of RpcErrorsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?RpcErrorsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}