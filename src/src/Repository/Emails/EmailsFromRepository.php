<?php

namespace App\Repository\Emails;

use App\Entity\Emails\EmailsFrom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmailsFrom>
 *
 * @method EmailsFrom|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmailsFrom|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmailsFrom[]    findAll()
 * @method EmailsFrom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmailsFromRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmailsFrom::class);
    }

    public function save(EmailsFrom $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmailsFrom $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EmailsFromAssignmentTypes[] Returns an array of EmailsFromAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?EmailsFromAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}