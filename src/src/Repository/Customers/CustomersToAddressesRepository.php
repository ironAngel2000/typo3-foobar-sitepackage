<?php

namespace App\Repository\Customers;

use App\Entity\Customers\CustomersToAddresses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CustomersToAddresses>
 *
 * @method CustomersToAddresses|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomersToAddresses|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomersToAddresses[]    findAll()
 * @method CustomersToAddresses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomersToAddressesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomersToAddresses::class);
    }

    public function save(CustomersToAddresses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CustomersToAddresses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CustomersToAddressesAssignmentTypes[] Returns an array of CustomersToAddressesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CustomersToAddressesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}