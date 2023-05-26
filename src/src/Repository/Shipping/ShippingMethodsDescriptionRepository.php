<?php

namespace App\Repository\Shipping;

use App\Entity\Shipping\ShippingMethodsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShippingMethodsDescription>
 *
 * @method ShippingMethodsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShippingMethodsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShippingMethodsDescription[]    findAll()
 * @method ShippingMethodsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShippingMethodsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShippingMethodsDescription::class);
    }

    public function save(ShippingMethodsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShippingMethodsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShippingMethodsDescriptionAssignmentTypes[] Returns an array of ShippingMethodsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShippingMethodsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}