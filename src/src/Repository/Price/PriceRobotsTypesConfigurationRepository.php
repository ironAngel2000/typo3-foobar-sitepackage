<?php

namespace App\Repository\Price;

use App\Entity\Price\PriceRobotsTypesConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PriceRobotsTypesConfiguration>
 *
 * @method PriceRobotsTypesConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method PriceRobotsTypesConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method PriceRobotsTypesConfiguration[]    findAll()
 * @method PriceRobotsTypesConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PriceRobotsTypesConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PriceRobotsTypesConfiguration::class);
    }

    public function save(PriceRobotsTypesConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PriceRobotsTypesConfiguration $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PriceRobotsTypesConfigurationAssignmentTypes[] Returns an array of PriceRobotsTypesConfigurationAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PriceRobotsTypesConfigurationAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}