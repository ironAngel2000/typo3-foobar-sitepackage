<?php

namespace App\Repository\Groups;

use App\Entity\Groups\GroupsRulesToShops;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GroupsRulesToShops>
 *
 * @method GroupsRulesToShops|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupsRulesToShops|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupsRulesToShops[]    findAll()
 * @method GroupsRulesToShops[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupsRulesToShopsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupsRulesToShops::class);
    }

    public function save(GroupsRulesToShops $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GroupsRulesToShops $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GroupsRulesToShopsAssignmentTypes[] Returns an array of GroupsRulesToShopsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?GroupsRulesToShopsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}