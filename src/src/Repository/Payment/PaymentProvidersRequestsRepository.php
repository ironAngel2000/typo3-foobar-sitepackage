<?php

namespace App\Repository\Payment;

use App\Entity\Payment\PaymentProvidersRequests;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentProvidersRequests>
 *
 * @method PaymentProvidersRequests|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentProvidersRequests|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentProvidersRequests[]    findAll()
 * @method PaymentProvidersRequests[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentProvidersRequestsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentProvidersRequests::class);
    }

    public function save(PaymentProvidersRequests $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaymentProvidersRequests $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaymentProvidersRequestsAssignmentTypes[] Returns an array of PaymentProvidersRequestsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PaymentProvidersRequestsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}