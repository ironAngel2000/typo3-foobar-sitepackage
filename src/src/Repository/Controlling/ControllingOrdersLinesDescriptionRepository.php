<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingOrdersLinesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingOrdersLinesDescription>
 *
 * @method ControllingOrdersLinesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingOrdersLinesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingOrdersLinesDescription[]    findAll()
 * @method ControllingOrdersLinesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingOrdersLinesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingOrdersLinesDescription::class);
    }

    public function save(ControllingOrdersLinesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingOrdersLinesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingOrdersLinesDescriptionAssignmentTypes[] Returns an array of ControllingOrdersLinesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingOrdersLinesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}