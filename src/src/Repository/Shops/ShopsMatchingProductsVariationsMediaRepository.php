<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingProductsVariationsMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingProductsVariationsMedia>
 *
 * @method ShopsMatchingProductsVariationsMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingProductsVariationsMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingProductsVariationsMedia[]    findAll()
 * @method ShopsMatchingProductsVariationsMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingProductsVariationsMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingProductsVariationsMedia::class);
    }

    public function save(ShopsMatchingProductsVariationsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingProductsVariationsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingProductsVariationsMediaAssignmentTypes[] Returns an array of ShopsMatchingProductsVariationsMediaAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingProductsVariationsMediaAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}