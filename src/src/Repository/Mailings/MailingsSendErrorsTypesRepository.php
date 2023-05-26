<?php

namespace App\Repository\Mailings;

use App\Entity\Mailings\MailingsSendErrorsTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MailingsSendErrorsTypes>
 *
 * @method MailingsSendErrorsTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailingsSendErrorsTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailingsSendErrorsTypes[]    findAll()
 * @method MailingsSendErrorsTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailingsSendErrorsTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MailingsSendErrorsTypes::class);
    }

    public function save(MailingsSendErrorsTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MailingsSendErrorsTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MailingsSendErrorsTypesAssignmentTypes[] Returns an array of MailingsSendErrorsTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?MailingsSendErrorsTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}