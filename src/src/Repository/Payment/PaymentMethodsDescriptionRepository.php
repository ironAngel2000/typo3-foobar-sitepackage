<?php

namespace App\Repository\Payment;

use App\Entity\Payment\PaymentMethodsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentMethodsDescription>
 *
 * @method PaymentMethodsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentMethodsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentMethodsDescription[]    findAll()
 * @method PaymentMethodsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentMethodsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentMethodsDescription::class);
    }

    public function save(PaymentMethodsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaymentMethodsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaymentMethodsDescriptionAssignmentTypes[] Returns an array of PaymentMethodsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PaymentMethodsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}