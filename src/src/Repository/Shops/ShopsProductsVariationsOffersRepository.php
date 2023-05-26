<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsVariationsOffers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsVariationsOffers>
 *
 * @method ShopsProductsVariationsOffers|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsVariationsOffers|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsVariationsOffers[]    findAll()
 * @method ShopsProductsVariationsOffers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsVariationsOffersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsVariationsOffers::class);
    }

    public function save(ShopsProductsVariationsOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsVariationsOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsVariationsOffersAssignmentTypes[] Returns an array of ShopsProductsVariationsOffersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsVariationsOffersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}