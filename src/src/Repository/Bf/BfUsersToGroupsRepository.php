<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfUsersToGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfUsersToGroups>
 *
 * @method BfUsersToGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfUsersToGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfUsersToGroups[]    findAll()
 * @method BfUsersToGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfUsersToGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfUsersToGroups::class);
    }

    public function save(BfUsersToGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfUsersToGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfUsersToGroupsAssignmentTypes[] Returns an array of BfUsersToGroupsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfUsersToGroupsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}