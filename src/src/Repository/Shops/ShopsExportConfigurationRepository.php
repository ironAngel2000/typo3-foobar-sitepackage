<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsExportConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsExportConfiguration>
 *
 * @method ShopsExportConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsExportConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsExportConfiguration[]    findAll()
 * @method ShopsExportConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsExportConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsExportConfiguration::class);
    }

    public function save(ShopsExportConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsExportConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsExportConfigurationAssignmentTypes[] Returns an array of ShopsExportConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsExportConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}