<?php

namespace App\Repository\Api;

use App\Entity\Api\ApiExportstatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ApiExportstatus>
 *
 * @method ApiExportstatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApiExportstatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApiExportstatus[]    findAll()
 * @method ApiExportstatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApiExportstatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApiExportstatus::class);
    }

    public function save(ApiExportstatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ApiExportstatus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ApiExportstatusAssignmentTypes[] Returns an array of ApiExportstatusAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ApiExportstatusAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}