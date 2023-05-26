<?php

namespace App\Repository\Delivery;

use App\Entity\Delivery\DeliveryTimesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeliveryTimesDescription>
 *
 * @method DeliveryTimesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeliveryTimesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeliveryTimesDescription[]    findAll()
 * @method DeliveryTimesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeliveryTimesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeliveryTimesDescription::class);
    }

    public function save(DeliveryTimesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DeliveryTimesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DeliveryTimesDescriptionAssignmentTypes[] Returns an array of DeliveryTimesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?DeliveryTimesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}