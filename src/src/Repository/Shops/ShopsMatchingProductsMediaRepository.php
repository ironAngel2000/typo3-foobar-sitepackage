<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingProductsMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingProductsMedia>
 *
 * @method ShopsMatchingProductsMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingProductsMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingProductsMedia[]    findAll()
 * @method ShopsMatchingProductsMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingProductsMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingProductsMedia::class);
    }

    public function save(ShopsMatchingProductsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingProductsMedia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingProductsMediaAssignmentTypes[] Returns an array of ShopsMatchingProductsMediaAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingProductsMediaAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}