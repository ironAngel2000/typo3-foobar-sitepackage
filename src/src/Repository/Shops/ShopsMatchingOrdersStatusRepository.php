<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingOrdersStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingOrdersStatus>
 *
 * @method ShopsMatchingOrdersStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingOrdersStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingOrdersStatus[]    findAll()
 * @method ShopsMatchingOrdersStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingOrdersStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingOrdersStatus::class);
    }

    public function save(ShopsMatchingOrdersStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingOrdersStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingOrdersStatusAssignmentTypes[] Returns an array of ShopsMatchingOrdersStatusAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingOrdersStatusAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}