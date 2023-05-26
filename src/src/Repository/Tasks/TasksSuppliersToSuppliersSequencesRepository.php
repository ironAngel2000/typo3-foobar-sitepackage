<?php

namespace App\Repository\Tasks;

use App\Entity\Tasks\TasksSuppliersToSuppliersSequences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TasksSuppliersToSuppliersSequences>
 *
 * @method TasksSuppliersToSuppliersSequences|null find($id, $lockMode = null, $lockVersion = null)
 * @method TasksSuppliersToSuppliersSequences|null findOneBy(array $criteria, array $orderBy = null)
 * @method TasksSuppliersToSuppliersSequences[]    findAll()
 * @method TasksSuppliersToSuppliersSequences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasksSuppliersToSuppliersSequencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TasksSuppliersToSuppliersSequences::class);
    }

    public function save(TasksSuppliersToSuppliersSequences $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TasksSuppliersToSuppliersSequences $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TasksSuppliersToSuppliersSequencesAssignmentTypes[] Returns an array of TasksSuppliersToSuppliersSequencesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TasksSuppliersToSuppliersSequencesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}