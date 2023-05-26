<?php

namespace App\Repository\Price;

use App\Entity\Price\PriceRobotsShopsProductsVariationsPrices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PriceRobotsShopsProductsVariationsPrices>
 *
 * @method PriceRobotsShopsProductsVariationsPrices|null find($id, $lockMode = null, $lockVersion = null)
 * @method PriceRobotsShopsProductsVariationsPrices|null findOneBy(array $criteria, array $orderBy = null)
 * @method PriceRobotsShopsProductsVariationsPrices[]    findAll()
 * @method PriceRobotsShopsProductsVariationsPrices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PriceRobotsShopsProductsVariationsPricesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PriceRobotsShopsProductsVariationsPrices::class);
    }

    public function save(PriceRobotsShopsProductsVariationsPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PriceRobotsShopsProductsVariationsPrices $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PriceRobotsShopsProductsVariationsPricesAssignmentTypes[] Returns an array of PriceRobotsShopsProductsVariationsPricesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PriceRobotsShopsProductsVariationsPricesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}