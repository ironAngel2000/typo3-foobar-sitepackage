<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsStockLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsStockLocations>
 *
 * @method ShopsStockLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsStockLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsStockLocations[]    findAll()
 * @method ShopsStockLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsStockLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsStockLocations::class);
    }

    public function save(ShopsStockLocations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsStockLocations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsStockLocationsAssignmentTypes[] Returns an array of ShopsStockLocationsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsStockLocationsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}