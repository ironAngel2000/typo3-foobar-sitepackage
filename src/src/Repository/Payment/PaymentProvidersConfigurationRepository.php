<?php

namespace App\Repository\Payment;

use App\Entity\Payment\PaymentProvidersConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentProvidersConfiguration>
 *
 * @method PaymentProvidersConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentProvidersConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentProvidersConfiguration[]    findAll()
 * @method PaymentProvidersConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentProvidersConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentProvidersConfiguration::class);
    }

    public function save(PaymentProvidersConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaymentProvidersConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaymentProvidersConfigurationAssignmentTypes[] Returns an array of PaymentProvidersConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PaymentProvidersConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}