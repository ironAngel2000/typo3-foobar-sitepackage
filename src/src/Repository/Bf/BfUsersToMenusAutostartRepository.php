<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfUsersToMenusAutostart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfUsersToMenusAutostart>
 *
 * @method BfUsersToMenusAutostart|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfUsersToMenusAutostart|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfUsersToMenusAutostart[]    findAll()
 * @method BfUsersToMenusAutostart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfUsersToMenusAutostartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfUsersToMenusAutostart::class);
    }

    public function save(BfUsersToMenusAutostart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfUsersToMenusAutostart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfUsersToMenusAutostartAssignmentTypes[] Returns an array of BfUsersToMenusAutostartAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfUsersToMenusAutostartAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}