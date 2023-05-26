<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingOrdersLines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingOrdersLines>
 *
 * @method ControllingOrdersLines|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingOrdersLines|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingOrdersLines[]    findAll()
 * @method ControllingOrdersLines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingOrdersLinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingOrdersLines::class);
    }

    public function save(ControllingOrdersLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingOrdersLines $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingOrdersLinesAssignmentTypes[] Returns an array of ControllingOrdersLinesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingOrdersLinesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}