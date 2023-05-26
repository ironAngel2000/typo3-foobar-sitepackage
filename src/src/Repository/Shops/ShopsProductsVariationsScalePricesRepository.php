<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsVariationsScalePrices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsVariationsScalePrices>
 *
 * @method ShopsProductsVariationsScalePrices|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsVariationsScalePrices|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsVariationsScalePrices[]    findAll()
 * @method ShopsProductsVariationsScalePrices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsVariationsScalePricesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsVariationsScalePrices::class);
    }

    public function save(ShopsProductsVariationsScalePrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsVariationsScalePrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsVariationsScalePricesAssignmentTypes[] Returns an array of ShopsProductsVariationsScalePricesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsVariationsScalePricesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}