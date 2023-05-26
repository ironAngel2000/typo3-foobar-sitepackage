<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsTypesConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsTypesConfiguration>
 *
 * @method ShopsTypesConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsTypesConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsTypesConfiguration[]    findAll()
 * @method ShopsTypesConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsTypesConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsTypesConfiguration::class);
    }

    public function save(ShopsTypesConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsTypesConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsTypesConfigurationAssignmentTypes[] Returns an array of ShopsTypesConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsTypesConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}