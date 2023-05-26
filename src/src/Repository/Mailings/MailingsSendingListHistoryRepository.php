<?php

namespace App\Repository\Mailings;

use App\Entity\Mailings\MailingsSendingListHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MailingsSendingListHistory>
 *
 * @method MailingsSendingListHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailingsSendingListHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailingsSendingListHistory[]    findAll()
 * @method MailingsSendingListHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailingsSendingListHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MailingsSendingListHistory::class);
    }

    public function save(MailingsSendingListHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MailingsSendingListHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MailingsSendingListHistoryAssignmentTypes[] Returns an array of MailingsSendingListHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?MailingsSendingListHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}