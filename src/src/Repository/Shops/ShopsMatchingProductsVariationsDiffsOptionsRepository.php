<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingProductsVariationsDiffsOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingProductsVariationsDiffsOptions>
 *
 * @method ShopsMatchingProductsVariationsDiffsOptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingProductsVariationsDiffsOptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingProductsVariationsDiffsOptions[]    findAll()
 * @method ShopsMatchingProductsVariationsDiffsOptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingProductsVariationsDiffsOptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingProductsVariationsDiffsOptions::class);
    }

    public function save(ShopsMatchingProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingProductsVariationsDiffsOptionsAssignmentTypes[] Returns an array of ShopsMatchingProductsVariationsDiffsOptionsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingProductsVariationsDiffsOptionsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}