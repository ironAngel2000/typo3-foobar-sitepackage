<?php

namespace App\Repository\Shipping;

use App\Entity\Shipping\ShippingModesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShippingModesDescription>
 *
 * @method ShippingModesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShippingModesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShippingModesDescription[]    findAll()
 * @method ShippingModesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShippingModesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShippingModesDescription::class);
    }

    public function save(ShippingModesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShippingModesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShippingModesDescriptionAssignmentTypes[] Returns an array of ShippingModesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShippingModesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}