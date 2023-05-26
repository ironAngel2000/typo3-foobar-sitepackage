<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingShopsOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingShopsOrders>
 *
 * @method ErpSystemsMatchingShopsOrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingShopsOrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingShopsOrders[]    findAll()
 * @method ErpSystemsMatchingShopsOrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingShopsOrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingShopsOrders::class);
    }

    public function save(ErpSystemsMatchingShopsOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingShopsOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingShopsOrdersAssignmentTypes[] Returns an array of ErpSystemsMatchingShopsOrdersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingShopsOrdersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}