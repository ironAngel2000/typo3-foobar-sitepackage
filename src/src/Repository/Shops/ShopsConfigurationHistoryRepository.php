<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsConfigurationHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsConfigurationHistory>
 *
 * @method ShopsConfigurationHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsConfigurationHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsConfigurationHistory[]    findAll()
 * @method ShopsConfigurationHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsConfigurationHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsConfigurationHistory::class);
    }

    public function save(ShopsConfigurationHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsConfigurationHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsConfigurationHistoryAssignmentTypes[] Returns an array of ShopsConfigurationHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsConfigurationHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}