<?php

namespace App\Repository\Mailings;

use App\Entity\Mailings\MailingsSendErrorsTypesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MailingsSendErrorsTypesDescription>
 *
 * @method MailingsSendErrorsTypesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailingsSendErrorsTypesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailingsSendErrorsTypesDescription[]    findAll()
 * @method MailingsSendErrorsTypesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailingsSendErrorsTypesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MailingsSendErrorsTypesDescription::class);
    }

    public function save(MailingsSendErrorsTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MailingsSendErrorsTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MailingsSendErrorsTypesDescriptionAssignmentTypes[] Returns an array of MailingsSendErrorsTypesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?MailingsSendErrorsTypesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}