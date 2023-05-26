<?php

namespace App\Repository\Mailings;

use App\Entity\Mailings\MailingsSendingList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MailingsSendingList>
 *
 * @method MailingsSendingList|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailingsSendingList|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailingsSendingList[]    findAll()
 * @method MailingsSendingList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailingsSendingListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MailingsSendingList::class);
    }

    public function save(MailingsSendingList $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MailingsSendingList $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MailingsSendingListAssignmentTypes[] Returns an array of MailingsSendingListAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?MailingsSendingListAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}