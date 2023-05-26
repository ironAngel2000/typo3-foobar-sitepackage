<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfClientsInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfClientsInfo>
 *
 * @method BfClientsInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfClientsInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfClientsInfo[]    findAll()
 * @method BfClientsInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfClientsInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfClientsInfo::class);
    }

    public function save(BfClientsInfo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfClientsInfo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfClientsInfoAssignmentTypes[] Returns an array of BfClientsInfoAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfClientsInfoAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}