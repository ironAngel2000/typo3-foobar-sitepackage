<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsCategoriesAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsCategoriesAttributes>
 *
 * @method ShopsCategoriesAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsCategoriesAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsCategoriesAttributes[]    findAll()
 * @method ShopsCategoriesAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsCategoriesAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsCategoriesAttributes::class);
    }

    public function save(ShopsCategoriesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsCategoriesAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsCategoriesAttributesAssignmentTypes[] Returns an array of ShopsCategoriesAttributesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsCategoriesAttributesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}