<?php

namespace App\Repository\Return;

use App\Entity\Return\ReturnTrackingIdFreeList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReturnTrackingIdFreeList>
 *
 * @method ReturnTrackingIdFreeList|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReturnTrackingIdFreeList|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReturnTrackingIdFreeList[]    findAll()
 * @method ReturnTrackingIdFreeList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReturnTrackingIdFreeListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReturnTrackingIdFreeList::class);
    }

    public function save(ReturnTrackingIdFreeList $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReturnTrackingIdFreeList $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ReturnTrackingIdFreeListAssignmentTypes[] Returns an array of ReturnTrackingIdFreeListAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ReturnTrackingIdFreeListAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}