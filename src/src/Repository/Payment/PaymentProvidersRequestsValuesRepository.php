<?php

namespace App\Repository\Payment;

use App\Entity\Payment\PaymentProvidersRequestsValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentProvidersRequestsValues>
 *
 * @method PaymentProvidersRequestsValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentProvidersRequestsValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentProvidersRequestsValues[]    findAll()
 * @method PaymentProvidersRequestsValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentProvidersRequestsValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentProvidersRequestsValues::class);
    }

    public function save(PaymentProvidersRequestsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaymentProvidersRequestsValues $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaymentProvidersRequestsValuesAssignmentTypes[] Returns an array of PaymentProvidersRequestsValuesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PaymentProvidersRequestsValuesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}