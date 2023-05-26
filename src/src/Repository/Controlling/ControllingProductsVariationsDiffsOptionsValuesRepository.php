<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingProductsVariationsDiffsOptionsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingProductsVariationsDiffsOptionsValues>
 *
 * @method ControllingProductsVariationsDiffsOptionsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingProductsVariationsDiffsOptionsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingProductsVariationsDiffsOptionsValues[]    findAll()
 * @method ControllingProductsVariationsDiffsOptionsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingProductsVariationsDiffsOptionsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingProductsVariationsDiffsOptionsValues::class);
    }

    public function save(ControllingProductsVariationsDiffsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingProductsVariationsDiffsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingProductsVariationsDiffsOptionsValuesAssignmentTypes[] Returns an array of ControllingProductsVariationsDiffsOptionsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingProductsVariationsDiffsOptionsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}