<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingProductsVariationsImages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingProductsVariationsImages>
 *
 * @method ShopsMatchingProductsVariationsImages|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingProductsVariationsImages|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingProductsVariationsImages[]    findAll()
 * @method ShopsMatchingProductsVariationsImages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingProductsVariationsImagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingProductsVariationsImages::class);
    }

    public function save(ShopsMatchingProductsVariationsImages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingProductsVariationsImages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingProductsVariationsImagesAssignmentTypes[] Returns an array of ShopsMatchingProductsVariationsImagesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingProductsVariationsImagesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}