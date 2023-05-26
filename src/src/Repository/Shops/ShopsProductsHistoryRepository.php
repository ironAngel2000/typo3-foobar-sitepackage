<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsHistory>
 *
 * @method ShopsProductsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsHistory[]    findAll()
 * @method ShopsProductsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsHistory::class);
    }

    public function save(ShopsProductsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsHistoryAssignmentTypes[] Returns an array of ShopsProductsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}