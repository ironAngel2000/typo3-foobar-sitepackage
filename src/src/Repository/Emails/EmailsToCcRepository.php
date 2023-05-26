<?php

namespace App\Repository\Emails;

use App\Entity\Emails\EmailsToCc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmailsToCc>
 *
 * @method EmailsToCc|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmailsToCc|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmailsToCc[]    findAll()
 * @method EmailsToCc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmailsToCcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmailsToCc::class);
    }

    public function save(EmailsToCc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmailsToCc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EmailsToCcAssignmentTypes[] Returns an array of EmailsToCcAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?EmailsToCcAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}