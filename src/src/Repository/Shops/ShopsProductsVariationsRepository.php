<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsVariations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsVariations>
 *
 * @method ShopsProductsVariations|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsVariations|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsVariations[]    findAll()
 * @method ShopsProductsVariations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsVariationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsVariations::class);
    }

    public function save(ShopsProductsVariations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsVariations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsVariationsAssignmentTypes[] Returns an array of ShopsProductsVariationsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsVariationsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}