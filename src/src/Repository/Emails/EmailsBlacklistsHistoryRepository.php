<?php

namespace App\Repository\Emails;

use App\Entity\Emails\EmailsBlacklistsHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmailsBlacklistsHistory>
 *
 * @method EmailsBlacklistsHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmailsBlacklistsHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmailsBlacklistsHistory[]    findAll()
 * @method EmailsBlacklistsHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmailsBlacklistsHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmailsBlacklistsHistory::class);
    }

    public function save(EmailsBlacklistsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmailsBlacklistsHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EmailsBlacklistsHistoryAssignmentTypes[] Returns an array of EmailsBlacklistsHistoryAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?EmailsBlacklistsHistoryAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}