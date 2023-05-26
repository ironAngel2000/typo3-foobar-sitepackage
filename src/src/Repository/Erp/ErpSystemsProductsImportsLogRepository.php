<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsProductsImportsLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsProductsImportsLog>
 *
 * @method ErpSystemsProductsImportsLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsProductsImportsLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsProductsImportsLog[]    findAll()
 * @method ErpSystemsProductsImportsLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsProductsImportsLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsProductsImportsLog::class);
    }

    public function save(ErpSystemsProductsImportsLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsProductsImportsLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsProductsImportsLogAssignmentTypes[] Returns an array of ErpSystemsProductsImportsLogAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsProductsImportsLogAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}