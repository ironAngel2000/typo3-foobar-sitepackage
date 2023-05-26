<?php

namespace App\Repository\States;

use App\Entity\States\StatesMatchings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StatesMatchings>
 *
 * @method StatesMatchings|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatesMatchings|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatesMatchings[]    findAll()
 * @method StatesMatchings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatesMatchingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatesMatchings::class);
    }

    public function save(StatesMatchings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(StatesMatchings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return StatesMatchingsAssignmentTypes[] Returns an array of StatesMatchingsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?StatesMatchingsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}