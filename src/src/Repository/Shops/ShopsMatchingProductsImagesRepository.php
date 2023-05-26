<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingProductsImages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingProductsImages>
 *
 * @method ShopsMatchingProductsImages|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingProductsImages|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingProductsImages[]    findAll()
 * @method ShopsMatchingProductsImages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingProductsImagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingProductsImages::class);
    }

    public function save(ShopsMatchingProductsImages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingProductsImages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingProductsImagesAssignmentTypes[] Returns an array of ShopsMatchingProductsImagesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingProductsImagesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}