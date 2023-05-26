<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfApplicationsTranslations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfApplicationsTranslations>
 *
 * @method BfApplicationsTranslations|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfApplicationsTranslations|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfApplicationsTranslations[]    findAll()
 * @method BfApplicationsTranslations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfApplicationsTranslationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfApplicationsTranslations::class);
    }

    public function save(BfApplicationsTranslations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfApplicationsTranslations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfApplicationsTranslationsAssignmentTypes[] Returns an array of BfApplicationsTranslationsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfApplicationsTranslationsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}