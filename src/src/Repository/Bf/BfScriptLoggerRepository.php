<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfScriptLogger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfScriptLogger>
 *
 * @method BfScriptLogger|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfScriptLogger|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfScriptLogger[]    findAll()
 * @method BfScriptLogger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfScriptLoggerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfScriptLogger::class);
    }

    public function save(BfScriptLogger $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfScriptLogger $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfScriptLoggerAssignmentTypes[] Returns an array of BfScriptLoggerAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfScriptLoggerAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}