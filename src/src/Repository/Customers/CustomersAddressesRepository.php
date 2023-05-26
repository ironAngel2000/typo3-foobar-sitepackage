<?php

namespace App\Repository\Customers;

use App\Entity\Customers\CustomersAddresses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CustomersAddresses>
 *
 * @method CustomersAddresses|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomersAddresses|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomersAddresses[]    findAll()
 * @method CustomersAddresses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomersAddressesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomersAddresses::class);
    }

    public function save(CustomersAddresses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CustomersAddresses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CustomersAddressesAssignmentTypes[] Returns an array of CustomersAddressesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CustomersAddressesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}