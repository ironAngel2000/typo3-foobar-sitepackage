<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsTypesPaymentMethods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsTypesPaymentMethods>
 *
 * @method ErpSystemsTypesPaymentMethods|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsTypesPaymentMethods|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsTypesPaymentMethods[]    findAll()
 * @method ErpSystemsTypesPaymentMethods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsTypesPaymentMethodsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsTypesPaymentMethods::class);
    }

    public function save(ErpSystemsTypesPaymentMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsTypesPaymentMethods $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsTypesPaymentMethodsAssignmentTypes[] Returns an array of ErpSystemsTypesPaymentMethodsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsTypesPaymentMethodsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}