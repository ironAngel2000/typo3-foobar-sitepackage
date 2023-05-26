<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsAddInfosFilters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsAddInfosFilters>
 *
 * @method ShopsAddInfosFilters|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsAddInfosFilters|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsAddInfosFilters[]    findAll()
 * @method ShopsAddInfosFilters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsAddInfosFiltersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsAddInfosFilters::class);
    }

    public function save(ShopsAddInfosFilters $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsAddInfosFilters $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsAddInfosFiltersAssignmentTypes[] Returns an array of ShopsAddInfosFiltersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsAddInfosFiltersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}