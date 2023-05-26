<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfUsersHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfUsersHistory>
 *
 * @method BfUsersHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfUsersHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfUsersHistory[]    findAll()
 * @method BfUsersHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfUsersHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfUsersHistory::class);
    }

    public function save(BfUsersHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfUsersHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfUsersHistoryAssignmentTypes[] Returns an array of BfUsersHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfUsersHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}