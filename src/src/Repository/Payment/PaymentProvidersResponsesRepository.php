<?php

namespace App\Repository\Payment;

use App\Entity\Payment\PaymentProvidersResponses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentProvidersResponses>
 *
 * @method PaymentProvidersResponses|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentProvidersResponses|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentProvidersResponses[]    findAll()
 * @method PaymentProvidersResponses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentProvidersResponsesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentProvidersResponses::class);
    }

    public function save(PaymentProvidersResponses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaymentProvidersResponses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaymentProvidersResponsesAssignmentTypes[] Returns an array of PaymentProvidersResponsesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PaymentProvidersResponsesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}