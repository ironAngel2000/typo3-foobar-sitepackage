<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfGroupsLanguages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfGroupsLanguages>
 *
 * @method BfGroupsLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfGroupsLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfGroupsLanguages[]    findAll()
 * @method BfGroupsLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfGroupsLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfGroupsLanguages::class);
    }

    public function save(BfGroupsLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfGroupsLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfGroupsLanguagesAssignmentTypes[] Returns an array of BfGroupsLanguagesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfGroupsLanguagesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}