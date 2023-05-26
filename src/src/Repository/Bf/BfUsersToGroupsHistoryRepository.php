<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfUsersToGroupsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfUsersToGroupsHistory>
 *
 * @method BfUsersToGroupsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfUsersToGroupsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfUsersToGroupsHistory[]    findAll()
 * @method BfUsersToGroupsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfUsersToGroupsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfUsersToGroupsHistory::class);
    }

    public function save(BfUsersToGroupsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfUsersToGroupsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfUsersToGroupsHistoryAssignmentTypes[] Returns an array of BfUsersToGroupsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfUsersToGroupsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}