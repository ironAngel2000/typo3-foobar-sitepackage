<?php

namespace App\Repository\Tasks;

use App\Entity\Tasks\TasksSuppliersStatusDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TasksSuppliersStatusDescription>
 *
 * @method TasksSuppliersStatusDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method TasksSuppliersStatusDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method TasksSuppliersStatusDescription[]    findAll()
 * @method TasksSuppliersStatusDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasksSuppliersStatusDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TasksSuppliersStatusDescription::class);
    }

    public function save(TasksSuppliersStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TasksSuppliersStatusDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TasksSuppliersStatusDescriptionAssignmentTypes[] Returns an array of TasksSuppliersStatusDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TasksSuppliersStatusDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}