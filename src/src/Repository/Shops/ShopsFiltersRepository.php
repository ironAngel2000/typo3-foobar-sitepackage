<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsFilters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsFilters>
 *
 * @method ShopsFilters|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsFilters|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsFilters[]    findAll()
 * @method ShopsFilters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsFiltersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsFilters::class);
    }

    public function save(ShopsFilters $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsFilters $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsFiltersAssignmentTypes[] Returns an array of ShopsFiltersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsFiltersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}