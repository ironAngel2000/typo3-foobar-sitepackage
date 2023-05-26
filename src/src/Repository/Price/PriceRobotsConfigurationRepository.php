<?php

namespace App\Repository\Price;

use App\Entity\Price\PriceRobotsConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PriceRobotsConfiguration>
 *
 * @method PriceRobotsConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method PriceRobotsConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method PriceRobotsConfiguration[]    findAll()
 * @method PriceRobotsConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PriceRobotsConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PriceRobotsConfiguration::class);
    }

    public function save(PriceRobotsConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PriceRobotsConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PriceRobotsConfigurationAssignmentTypes[] Returns an array of PriceRobotsConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PriceRobotsConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}