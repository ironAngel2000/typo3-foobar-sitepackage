<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingOrdersLinesTaxRate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingOrdersLinesTaxRate>
 *
 * @method ErpSystemsMatchingOrdersLinesTaxRate|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingOrdersLinesTaxRate|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingOrdersLinesTaxRate[]    findAll()
 * @method ErpSystemsMatchingOrdersLinesTaxRate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingOrdersLinesTaxRateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingOrdersLinesTaxRate::class);
    }

    public function save(ErpSystemsMatchingOrdersLinesTaxRate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingOrdersLinesTaxRate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingOrdersLinesTaxRateAssignmentTypes[] Returns an array of ErpSystemsMatchingOrdersLinesTaxRateAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingOrdersLinesTaxRateAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}