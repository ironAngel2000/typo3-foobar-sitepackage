<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsCategoriesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsCategoriesDescription>
 *
 * @method ShopsCategoriesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsCategoriesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsCategoriesDescription[]    findAll()
 * @method ShopsCategoriesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsCategoriesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsCategoriesDescription::class);
    }

    public function save(ShopsCategoriesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsCategoriesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsCategoriesDescriptionAssignmentTypes[] Returns an array of ShopsCategoriesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsCategoriesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}