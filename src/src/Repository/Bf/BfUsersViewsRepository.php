<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfUsersViews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfUsersViews>
 *
 * @method BfUsersViews|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfUsersViews|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfUsersViews[]    findAll()
 * @method BfUsersViews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfUsersViewsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfUsersViews::class);
    }

    public function save(BfUsersViews $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfUsersViews $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfUsersViewsAssignmentTypes[] Returns an array of BfUsersViewsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfUsersViewsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}