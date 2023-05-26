<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingShippingMethods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingShippingMethods>
 *
 * @method ShopsMatchingShippingMethods|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingShippingMethods|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingShippingMethods[]    findAll()
 * @method ShopsMatchingShippingMethods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingShippingMethodsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingShippingMethods::class);
    }

    public function save(ShopsMatchingShippingMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingShippingMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingShippingMethodsAssignmentTypes[] Returns an array of ShopsMatchingShippingMethodsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingShippingMethodsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}