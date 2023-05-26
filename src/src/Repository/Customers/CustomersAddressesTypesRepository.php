<?php

namespace App\Repository\Customers;

use App\Entity\Customers\CustomersAddressesTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CustomersAddressesTypes>
 *
 * @method CustomersAddressesTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomersAddressesTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomersAddressesTypes[]    findAll()
 * @method CustomersAddressesTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomersAddressesTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomersAddressesTypes::class);
    }

    public function save(CustomersAddressesTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CustomersAddressesTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CustomersAddressesTypesAssignmentTypes[] Returns an array of CustomersAddressesTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?CustomersAddressesTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}