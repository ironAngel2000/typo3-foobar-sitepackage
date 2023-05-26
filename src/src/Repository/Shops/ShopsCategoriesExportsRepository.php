<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsCategoriesExports;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsCategoriesExports>
 *
 * @method ShopsCategoriesExports|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsCategoriesExports|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsCategoriesExports[]    findAll()
 * @method ShopsCategoriesExports[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsCategoriesExportsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsCategoriesExports::class);
    }

    public function save(ShopsCategoriesExports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsCategoriesExports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsCategoriesExportsAssignmentTypes[] Returns an array of ShopsCategoriesExportsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsCategoriesExportsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}