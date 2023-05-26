<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingAdditional;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingAdditional>
 *
 * @method ErpSystemsMatchingAdditional|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingAdditional|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingAdditional[]    findAll()
 * @method ErpSystemsMatchingAdditional[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingAdditionalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingAdditional::class);
    }

    public function save(ErpSystemsMatchingAdditional $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingAdditional $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingAdditionalAssignmentTypes[] Returns an array of ErpSystemsMatchingAdditionalAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingAdditionalAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}