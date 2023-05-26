<?php

namespace App\Repository\Tasks;

use App\Entity\Tasks\TasksSuppliersToSuppliers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TasksSuppliersToSuppliers>
 *
 * @method TasksSuppliersToSuppliers|null find($id, $lockMode = null, $lockVersion = null)
 * @method TasksSuppliersToSuppliers|null findOneBy(array $criteria, array $orderBy = null)
 * @method TasksSuppliersToSuppliers[]    findAll()
 * @method TasksSuppliersToSuppliers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasksSuppliersToSuppliersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TasksSuppliersToSuppliers::class);
    }

    public function save(TasksSuppliersToSuppliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TasksSuppliersToSuppliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TasksSuppliersToSuppliersAssignmentTypes[] Returns an array of TasksSuppliersToSuppliersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TasksSuppliersToSuppliersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}