<?php

namespace App\Repository\Coupons;

use App\Entity\Coupons\CouponsReduceTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CouponsReduceTypes>
 *
 * @method CouponsReduceTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CouponsReduceTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CouponsReduceTypes[]    findAll()
 * @method CouponsReduceTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouponsReduceTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CouponsReduceTypes::class);
    }

    public function save(CouponsReduceTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CouponsReduceTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CouponsReduceTypesAssignmentTypes[] Returns an array of CouponsReduceTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CouponsReduceTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}