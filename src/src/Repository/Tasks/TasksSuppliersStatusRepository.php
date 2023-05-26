<?php

namespace App\Repository\Tasks;

use App\Entity\Tasks\TasksSuppliersStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TasksSuppliersStatus>
 *
 * @method TasksSuppliersStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method TasksSuppliersStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method TasksSuppliersStatus[]    findAll()
 * @method TasksSuppliersStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasksSuppliersStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TasksSuppliersStatus::class);
    }

    public function save(TasksSuppliersStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TasksSuppliersStatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TasksSuppliersStatusAssignmentTypes[] Returns an array of TasksSuppliersStatusAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TasksSuppliersStatusAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}