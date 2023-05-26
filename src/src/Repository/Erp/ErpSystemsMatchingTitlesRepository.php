<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingTitles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingTitles>
 *
 * @method ErpSystemsMatchingTitles|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingTitles|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingTitles[]    findAll()
 * @method ErpSystemsMatchingTitles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingTitlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingTitles::class);
    }

    public function save(ErpSystemsMatchingTitles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingTitles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingTitlesAssignmentTypes[] Returns an array of ErpSystemsMatchingTitlesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingTitlesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}