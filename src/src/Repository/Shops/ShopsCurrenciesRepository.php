<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsCurrencies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsCurrencies>
 *
 * @method ShopsCurrencies|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsCurrencies|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsCurrencies[]    findAll()
 * @method ShopsCurrencies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsCurrenciesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsCurrencies::class);
    }

    public function save(ShopsCurrencies $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsCurrencies $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsCurrenciesAssignmentTypes[] Returns an array of ShopsCurrenciesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsCurrenciesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}