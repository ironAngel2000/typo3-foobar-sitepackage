<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsVariationsSpecialPricesHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsVariationsSpecialPricesHistory>
 *
 * @method ShopsProductsVariationsSpecialPricesHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsVariationsSpecialPricesHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsVariationsSpecialPricesHistory[]    findAll()
 * @method ShopsProductsVariationsSpecialPricesHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsVariationsSpecialPricesHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsVariationsSpecialPricesHistory::class);
    }

    public function save(ShopsProductsVariationsSpecialPricesHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsVariationsSpecialPricesHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsVariationsSpecialPricesHistoryAssignmentTypes[] Returns an array of ShopsProductsVariationsSpecialPricesHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsVariationsSpecialPricesHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}