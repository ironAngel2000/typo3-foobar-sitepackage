<?php

namespace App\Repository\Invoice;

use App\Entity\Invoice\InvoiceNumbers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InvoiceNumbers>
 *
 * @method InvoiceNumbers|null find($id, $lockMode = null, $lockVersion = null)
 * @method InvoiceNumbers|null findOneBy(array $criteria, array $orderBy = null)
 * @method InvoiceNumbers[]    findAll()
 * @method InvoiceNumbers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoiceNumbersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InvoiceNumbers::class);
    }

    public function save(InvoiceNumbers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InvoiceNumbers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InvoiceNumbersAssignmentTypes[] Returns an array of InvoiceNumbersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?InvoiceNumbersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}