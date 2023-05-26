<?php

namespace App\Repository\Coupons;

use App\Entity\Coupons\CouponsGroupsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CouponsGroupsDescription>
 *
 * @method CouponsGroupsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method CouponsGroupsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method CouponsGroupsDescription[]    findAll()
 * @method CouponsGroupsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouponsGroupsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CouponsGroupsDescription::class);
    }

    public function save(CouponsGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CouponsGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CouponsGroupsDescriptionAssignmentTypes[] Returns an array of CouponsGroupsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CouponsGroupsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}