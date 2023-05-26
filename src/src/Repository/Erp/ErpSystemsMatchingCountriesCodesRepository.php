<?php

namespace App\Repository\Erp;

use App\Entity\Erp\ErpSystemsMatchingCountriesCodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ErpSystemsMatchingCountriesCodes>
 *
 * @method ErpSystemsMatchingCountriesCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErpSystemsMatchingCountriesCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErpSystemsMatchingCountriesCodes[]    findAll()
 * @method ErpSystemsMatchingCountriesCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErpSystemsMatchingCountriesCodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErpSystemsMatchingCountriesCodes::class);
    }

    public function save(ErpSystemsMatchingCountriesCodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ErpSystemsMatchingCountriesCodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ErpSystemsMatchingCountriesCodesAssignmentTypes[] Returns an array of ErpSystemsMatchingCountriesCodesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ErpSystemsMatchingCountriesCodesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}