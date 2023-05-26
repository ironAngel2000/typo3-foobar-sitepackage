<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsVariationsCombinationsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsVariationsCombinationsHistory>
 *
 * @method ShopsProductsVariationsCombinationsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsVariationsCombinationsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsVariationsCombinationsHistory[]    findAll()
 * @method ShopsProductsVariationsCombinationsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsVariationsCombinationsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsVariationsCombinationsHistory::class);
    }

    public function save(ShopsProductsVariationsCombinationsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsVariationsCombinationsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsVariationsCombinationsHistoryAssignmentTypes[] Returns an array of ShopsProductsVariationsCombinationsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsVariationsCombinationsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}