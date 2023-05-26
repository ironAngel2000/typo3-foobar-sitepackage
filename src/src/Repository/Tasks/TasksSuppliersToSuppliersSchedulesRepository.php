<?php

namespace App\Repository\Tasks;

use App\Entity\Tasks\TasksSuppliersToSuppliersSchedules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TasksSuppliersToSuppliersSchedules>
 *
 * @method TasksSuppliersToSuppliersSchedules|null find($id, $lockMode = null, $lockVersion = null)
 * @method TasksSuppliersToSuppliersSchedules|null findOneBy(array $criteria, array $orderBy = null)
 * @method TasksSuppliersToSuppliersSchedules[]    findAll()
 * @method TasksSuppliersToSuppliersSchedules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasksSuppliersToSuppliersSchedulesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TasksSuppliersToSuppliersSchedules::class);
    }

    public function save(TasksSuppliersToSuppliersSchedules $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TasksSuppliersToSuppliersSchedules $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TasksSuppliersToSuppliersSchedulesAssignmentTypes[] Returns an array of TasksSuppliersToSuppliersSchedulesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TasksSuppliersToSuppliersSchedulesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}