<?php

namespace App\Repository\Payment;

use App\Entity\Payment\PaymentProviders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentProviders>
 *
 * @method PaymentProviders|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentProviders|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentProviders[]    findAll()
 * @method PaymentProviders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentProvidersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentProviders::class);
    }

    public function save(PaymentProviders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaymentProviders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaymentProvidersAssignmentTypes[] Returns an array of PaymentProvidersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PaymentProvidersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}