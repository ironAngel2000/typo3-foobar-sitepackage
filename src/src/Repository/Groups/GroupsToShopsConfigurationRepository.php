<?php

namespace App\Repository\Groups;

use App\Entity\Groups\GroupsToShopsConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GroupsToShopsConfiguration>
 *
 * @method GroupsToShopsConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupsToShopsConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupsToShopsConfiguration[]    findAll()
 * @method GroupsToShopsConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupsToShopsConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupsToShopsConfiguration::class);
    }

    public function save(GroupsToShopsConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GroupsToShopsConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GroupsToShopsConfigurationAssignmentTypes[] Returns an array of GroupsToShopsConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?GroupsToShopsConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}