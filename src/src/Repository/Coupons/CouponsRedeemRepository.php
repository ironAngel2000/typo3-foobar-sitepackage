<?php

namespace App\Repository\Coupons;

use App\Entity\Coupons\CouponsRedeem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CouponsRedeem>
 *
 * @method CouponsRedeem|null find($id, $lockMode = null, $lockVersion = null)
 * @method CouponsRedeem|null findOneBy(array $criteria, array $orderBy = null)
 * @method CouponsRedeem[]    findAll()
 * @method CouponsRedeem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouponsRedeemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CouponsRedeem::class);
    }

    public function save(CouponsRedeem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CouponsRedeem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CouponsRedeemAssignmentTypes[] Returns an array of CouponsRedeemAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CouponsRedeemAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}