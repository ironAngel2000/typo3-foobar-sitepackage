<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsTypesErrorsSeverities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsTypesErrorsSeverities>
 *
 * @method ShopsTypesErrorsSeverities|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsTypesErrorsSeverities|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsTypesErrorsSeverities[]    findAll()
 * @method ShopsTypesErrorsSeverities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsTypesErrorsSeveritiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsTypesErrorsSeverities::class);
    }

    public function save(ShopsTypesErrorsSeverities $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsTypesErrorsSeverities $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsTypesErrorsSeveritiesAssignmentTypes[] Returns an array of ShopsTypesErrorsSeveritiesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsTypesErrorsSeveritiesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}