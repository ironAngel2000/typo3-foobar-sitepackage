<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingShopsProductsDiffsOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingShopsProductsDiffsOptions>
 *
 * @method ShopsMatchingShopsProductsDiffsOptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingShopsProductsDiffsOptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingShopsProductsDiffsOptions[]    findAll()
 * @method ShopsMatchingShopsProductsDiffsOptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingShopsProductsDiffsOptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingShopsProductsDiffsOptions::class);
    }

    public function save(ShopsMatchingShopsProductsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingShopsProductsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingShopsProductsDiffsOptionsAssignmentTypes[] Returns an array of ShopsMatchingShopsProductsDiffsOptionsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingShopsProductsDiffsOptionsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}