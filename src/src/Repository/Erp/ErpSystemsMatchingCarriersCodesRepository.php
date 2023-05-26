<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingCarriersCodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingCarriersCodes>
 *
 * @method ErpSystemsMatchingCarriersCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingCarriersCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingCarriersCodes[]    findAll()
 * @method ErpSystemsMatchingCarriersCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingCarriersCodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingCarriersCodes::class);
    }

    public function save(ErpSystemsMatchingCarriersCodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingCarriersCodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingCarriersCodesAssignmentTypes[] Returns an array of ErpSystemsMatchingCarriersCodesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingCarriersCodesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}