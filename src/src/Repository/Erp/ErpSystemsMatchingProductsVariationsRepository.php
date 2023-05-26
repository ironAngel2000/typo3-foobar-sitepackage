<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingProductsVariations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingProductsVariations>
 *
 * @method ErpSystemsMatchingProductsVariations|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingProductsVariations|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingProductsVariations[]    findAll()
 * @method ErpSystemsMatchingProductsVariations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingProductsVariationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingProductsVariations::class);
    }

    public function save(ErpSystemsMatchingProductsVariations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingProductsVariations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingProductsVariationsAssignmentTypes[] Returns an array of ErpSystemsMatchingProductsVariationsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingProductsVariationsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}