<?php

namespace App\Repository\Tax;

use App\Entity\Tax\TaxCategoriesValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TaxCategoriesValues>
 *
 * @method TaxCategoriesValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaxCategoriesValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaxCategoriesValues[]    findAll()
 * @method TaxCategoriesValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaxCategoriesValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaxCategoriesValues::class);
    }

    public function save(TaxCategoriesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TaxCategoriesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TaxCategoriesValuesAssignmentTypes[] Returns an array of TaxCategoriesValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TaxCategoriesValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}