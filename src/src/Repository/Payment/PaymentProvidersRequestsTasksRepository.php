<?php

namespace App\Repository\Payment;

use App\Entity\Payment\PaymentProvidersRequestsTasks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentProvidersRequestsTasks>
 *
 * @method PaymentProvidersRequestsTasks|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentProvidersRequestsTasks|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentProvidersRequestsTasks[]    findAll()
 * @method PaymentProvidersRequestsTasks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentProvidersRequestsTasksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentProvidersRequestsTasks::class);
    }

    public function save(PaymentProvidersRequestsTasks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaymentProvidersRequestsTasks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaymentProvidersRequestsTasksAssignmentTypes[] Returns an array of PaymentProvidersRequestsTasksAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PaymentProvidersRequestsTasksAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}