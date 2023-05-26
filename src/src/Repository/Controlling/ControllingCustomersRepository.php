<?php

namespace App\Repository\Controlling;

use App\Entity\Controlling\ControllingCustomers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControllingCustomers>
 *
 * @method ControllingCustomers|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControllingCustomers|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControllingCustomers[]    findAll()
 * @method ControllingCustomers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControllingCustomersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControllingCustomers::class);
    }

    public function save(ControllingCustomers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControllingCustomers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControllingCustomersAssignmentTypes[] Returns an array of ControllingCustomersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ControllingCustomersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}