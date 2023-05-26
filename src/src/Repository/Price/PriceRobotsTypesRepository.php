<?php

namespace App\Repository\Price;

use App\Entity\Price\PriceRobotsTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PriceRobotsTypes>
 *
 * @method PriceRobotsTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method PriceRobotsTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method PriceRobotsTypes[]    findAll()
 * @method PriceRobotsTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PriceRobotsTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PriceRobotsTypes::class);
    }

    public function save(PriceRobotsTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PriceRobotsTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PriceRobotsTypesAssignmentTypes[] Returns an array of PriceRobotsTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?PriceRobotsTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}