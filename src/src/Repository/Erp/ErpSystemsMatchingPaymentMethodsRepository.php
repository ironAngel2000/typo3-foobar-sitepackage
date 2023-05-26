<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingPaymentMethods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingPaymentMethods>
 *
 * @method ErpSystemsMatchingPaymentMethods|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingPaymentMethods|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingPaymentMethods[]    findAll()
 * @method ErpSystemsMatchingPaymentMethods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingPaymentMethodsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingPaymentMethods::class);
    }

    public function save(ErpSystemsMatchingPaymentMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingPaymentMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingPaymentMethodsAssignmentTypes[] Returns an array of ErpSystemsMatchingPaymentMethodsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingPaymentMethodsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}