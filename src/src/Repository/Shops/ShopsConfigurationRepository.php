<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsConfiguration>
 *
 * @method ShopsConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsConfiguration[]    findAll()
 * @method ShopsConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsConfiguration::class);
    }

    public function save(ShopsConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsConfigurationAssignmentTypes[] Returns an array of ShopsConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}