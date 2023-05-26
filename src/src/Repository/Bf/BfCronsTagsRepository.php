<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfCronsTags;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfCronsTags>
 *
 * @method BfCronsTags|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfCronsTags|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfCronsTags[]    findAll()
 * @method BfCronsTags[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfCronsTagsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfCronsTags::class);
    }

    public function save(BfCronsTags $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfCronsTags $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfCronsTagsAssignmentTypes[] Returns an array of BfCronsTagsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfCronsTagsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}