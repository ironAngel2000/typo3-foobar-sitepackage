<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsBrandsImports;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsBrandsImports>
 *
 * @method ErpSystemsBrandsImports|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsBrandsImports|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsBrandsImports[]    findAll()
 * @method ErpSystemsBrandsImports[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsBrandsImportsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsBrandsImports::class);
    }

    public function save(ErpSystemsBrandsImports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsBrandsImports $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsBrandsImportsAssignmentTypes[] Returns an array of ErpSystemsBrandsImportsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsBrandsImportsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}