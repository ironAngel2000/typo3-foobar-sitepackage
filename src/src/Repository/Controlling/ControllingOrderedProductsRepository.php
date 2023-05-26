<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingOrderedProducts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingOrderedProducts>
 *
 * @method ControllingOrderedProducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingOrderedProducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingOrderedProducts[]    findAll()
 * @method ControllingOrderedProducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingOrderedProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingOrderedProducts::class);
    }

    public function save(ControllingOrderedProducts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingOrderedProducts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingOrderedProductsAssignmentTypes[] Returns an array of ControllingOrderedProductsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingOrderedProductsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}