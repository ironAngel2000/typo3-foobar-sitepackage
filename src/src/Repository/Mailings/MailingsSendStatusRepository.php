<?php

namespace App\Repository\Mailings;

use App\Entity\Mailings\MailingsSendStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MailingsSendStatus>
 *
 * @method MailingsSendStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailingsSendStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailingsSendStatus[]    findAll()
 * @method MailingsSendStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailingsSendStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MailingsSendStatus::class);
    }

    public function save(MailingsSendStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MailingsSendStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MailingsSendStatusAssignmentTypes[] Returns an array of MailingsSendStatusAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?MailingsSendStatusAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}