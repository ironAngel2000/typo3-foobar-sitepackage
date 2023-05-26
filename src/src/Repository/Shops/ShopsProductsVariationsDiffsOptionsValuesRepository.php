<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsVariationsDiffsOptionsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsVariationsDiffsOptionsValues>
 *
 * @method ShopsProductsVariationsDiffsOptionsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsVariationsDiffsOptionsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsVariationsDiffsOptionsValues[]    findAll()
 * @method ShopsProductsVariationsDiffsOptionsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsVariationsDiffsOptionsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsVariationsDiffsOptionsValues::class);
    }

    public function save(ShopsProductsVariationsDiffsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsVariationsDiffsOptionsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsVariationsDiffsOptionsValuesAssignmentTypes[] Returns an array of ShopsProductsVariationsDiffsOptionsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsVariationsDiffsOptionsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}