<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingShippingMethods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingShippingMethods>
 *
 * @method ErpSystemsMatchingShippingMethods|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingShippingMethods|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingShippingMethods[]    findAll()
 * @method ErpSystemsMatchingShippingMethods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingShippingMethodsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingShippingMethods::class);
    }

    public function save(ErpSystemsMatchingShippingMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingShippingMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingShippingMethodsAssignmentTypes[] Returns an array of ErpSystemsMatchingShippingMethodsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingShippingMethodsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}