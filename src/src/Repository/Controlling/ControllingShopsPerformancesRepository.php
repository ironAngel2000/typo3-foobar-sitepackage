<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingShopsPerformances;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingShopsPerformances>
 *
 * @method ControllingShopsPerformances|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingShopsPerformances|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingShopsPerformances[]    findAll()
 * @method ControllingShopsPerformances[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingShopsPerformancesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingShopsPerformances::class);
    }

    public function save(ControllingShopsPerformances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingShopsPerformances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingShopsPerformancesAssignmentTypes[] Returns an array of ControllingShopsPerformancesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingShopsPerformancesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}