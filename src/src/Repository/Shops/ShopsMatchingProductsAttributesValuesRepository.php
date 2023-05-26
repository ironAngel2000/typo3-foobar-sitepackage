<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingProductsAttributesValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingProductsAttributesValues>
 *
 * @method ShopsMatchingProductsAttributesValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingProductsAttributesValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingProductsAttributesValues[]    findAll()
 * @method ShopsMatchingProductsAttributesValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingProductsAttributesValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingProductsAttributesValues::class);
    }

    public function save(ShopsMatchingProductsAttributesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingProductsAttributesValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingProductsAttributesValuesAssignmentTypes[] Returns an array of ShopsMatchingProductsAttributesValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingProductsAttributesValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}