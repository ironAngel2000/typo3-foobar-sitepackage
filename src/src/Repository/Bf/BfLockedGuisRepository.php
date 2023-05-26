<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfLockedGuis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfLockedGuis>
 *
 * @method BfLockedGuis|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfLockedGuis|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfLockedGuis[]    findAll()
 * @method BfLockedGuis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfLockedGuisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfLockedGuis::class);
    }

    public function save(BfLockedGuis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfLockedGuis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfLockedGuisAssignmentTypes[] Returns an array of BfLockedGuisAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfLockedGuisAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}