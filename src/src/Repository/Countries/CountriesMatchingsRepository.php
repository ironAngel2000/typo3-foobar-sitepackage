<?php

namespace App\Repository\Countries;

use App\Entity\Countries\CountriesMatchings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CountriesMatchings>
 *
 * @method CountriesMatchings|null find($id, $lockMode = null, $lockVersion = null)
 * @method CountriesMatchings|null findOneBy(array $criteria, array $orderBy = null)
 * @method CountriesMatchings[]    findAll()
 * @method CountriesMatchings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountriesMatchingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CountriesMatchings::class);
    }

    public function save(CountriesMatchings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CountriesMatchings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CountriesMatchingsAssignmentTypes[] Returns an array of CountriesMatchingsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CountriesMatchingsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}