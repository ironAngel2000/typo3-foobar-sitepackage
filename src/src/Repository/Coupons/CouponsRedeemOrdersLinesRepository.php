<?php

namespace App\Repository\Coupons;

use App\Entity\Coupons\CouponsRedeemOrdersLines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CouponsRedeemOrdersLines>
 *
 * @method CouponsRedeemOrdersLines|null find($id, $lockMode = null, $lockVersion = null)
 * @method CouponsRedeemOrdersLines|null findOneBy(array $criteria, array $orderBy = null)
 * @method CouponsRedeemOrdersLines[]    findAll()
 * @method CouponsRedeemOrdersLines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouponsRedeemOrdersLinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CouponsRedeemOrdersLines::class);
    }

    public function save(CouponsRedeemOrdersLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CouponsRedeemOrdersLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CouponsRedeemOrdersLinesAssignmentTypes[] Returns an array of CouponsRedeemOrdersLinesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CouponsRedeemOrdersLinesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}