<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfGroupsToTables;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfGroupsToTables>
 *
 * @method BfGroupsToTables|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfGroupsToTables|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfGroupsToTables[]    findAll()
 * @method BfGroupsToTables[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfGroupsToTablesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfGroupsToTables::class);
    }

    public function save(BfGroupsToTables $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfGroupsToTables $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfGroupsToTablesAssignmentTypes[] Returns an array of BfGroupsToTablesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfGroupsToTablesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}