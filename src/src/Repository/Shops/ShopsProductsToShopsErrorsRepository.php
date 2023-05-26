<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsToShopsErrors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsToShopsErrors>
 *
 * @method ShopsProductsToShopsErrors|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsToShopsErrors|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsToShopsErrors[]    findAll()
 * @method ShopsProductsToShopsErrors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsToShopsErrorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsToShopsErrors::class);
    }

    public function save(ShopsProductsToShopsErrors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsToShopsErrors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsToShopsErrorsAssignmentTypes[] Returns an array of ShopsProductsToShopsErrorsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsToShopsErrorsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}