<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingProductsVariationsFlops;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingProductsVariationsFlops>
 *
 * @method ControllingProductsVariationsFlops|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingProductsVariationsFlops|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingProductsVariationsFlops[]    findAll()
 * @method ControllingProductsVariationsFlops[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingProductsVariationsFlopsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingProductsVariationsFlops::class);
    }

    public function save(ControllingProductsVariationsFlops $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingProductsVariationsFlops $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingProductsVariationsFlopsAssignmentTypes[] Returns an array of ControllingProductsVariationsFlopsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingProductsVariationsFlopsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}