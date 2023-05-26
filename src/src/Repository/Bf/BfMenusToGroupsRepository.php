<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfMenusToGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfMenusToGroups>
 *
 * @method BfMenusToGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfMenusToGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfMenusToGroups[]    findAll()
 * @method BfMenusToGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfMenusToGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfMenusToGroups::class);
    }

    public function save(BfMenusToGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfMenusToGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfMenusToGroupsAssignmentTypes[] Returns an array of BfMenusToGroupsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfMenusToGroupsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}