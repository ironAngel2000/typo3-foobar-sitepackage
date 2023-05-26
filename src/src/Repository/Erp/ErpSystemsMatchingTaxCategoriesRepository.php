<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingTaxCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingTaxCategories>
 *
 * @method ErpSystemsMatchingTaxCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingTaxCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingTaxCategories[]    findAll()
 * @method ErpSystemsMatchingTaxCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingTaxCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingTaxCategories::class);
    }

    public function save(ErpSystemsMatchingTaxCategories $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingTaxCategories $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingTaxCategoriesAssignmentTypes[] Returns an array of ErpSystemsMatchingTaxCategoriesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingTaxCategoriesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}