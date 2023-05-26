<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfConfiguration>
 *
 * @method BfConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfConfiguration[]    findAll()
 * @method BfConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfConfiguration::class);
    }

    public function save(BfConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfConfigurationAssignmentTypes[] Returns an array of BfConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}