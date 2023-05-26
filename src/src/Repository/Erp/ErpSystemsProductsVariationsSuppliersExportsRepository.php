<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsProductsVariationsSuppliersExports;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsProductsVariationsSuppliersExports>
 *
 * @method ErpSystemsProductsVariationsSuppliersExports|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsProductsVariationsSuppliersExports|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsProductsVariationsSuppliersExports[]    findAll()
 * @method ErpSystemsProductsVariationsSuppliersExports[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsProductsVariationsSuppliersExportsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsProductsVariationsSuppliersExports::class);
    }

    public function save(ErpSystemsProductsVariationsSuppliersExports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsProductsVariationsSuppliersExports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsProductsVariationsSuppliersExportsAssignmentTypes[] Returns an array of ErpSystemsProductsVariationsSuppliersExportsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsProductsVariationsSuppliersExportsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}