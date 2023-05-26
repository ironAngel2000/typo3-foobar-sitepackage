<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsBrands;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsBrands>
 *
 * @method ShopsBrands|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsBrands|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsBrands[]    findAll()
 * @method ShopsBrands[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsBrandsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsBrands::class);
    }

    public function save(ShopsBrands $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsBrands $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsBrandsAssignmentTypes[] Returns an array of ShopsBrandsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsBrandsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}