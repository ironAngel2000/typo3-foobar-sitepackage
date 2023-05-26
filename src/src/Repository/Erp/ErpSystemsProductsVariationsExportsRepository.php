<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsProductsVariationsExports;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsProductsVariationsExports>
 *
 * @method ErpSystemsProductsVariationsExports|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsProductsVariationsExports|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsProductsVariationsExports[]    findAll()
 * @method ErpSystemsProductsVariationsExports[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsProductsVariationsExportsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsProductsVariationsExports::class);
    }

    public function save(ErpSystemsProductsVariationsExports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsProductsVariationsExports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsProductsVariationsExportsAssignmentTypes[] Returns an array of ErpSystemsProductsVariationsExportsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsProductsVariationsExportsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}