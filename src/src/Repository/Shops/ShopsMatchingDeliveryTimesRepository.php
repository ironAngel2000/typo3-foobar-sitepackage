<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingDeliveryTimes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingDeliveryTimes>
 *
 * @method ShopsMatchingDeliveryTimes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingDeliveryTimes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingDeliveryTimes[]    findAll()
 * @method ShopsMatchingDeliveryTimes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingDeliveryTimesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingDeliveryTimes::class);
    }

    public function save(ShopsMatchingDeliveryTimes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingDeliveryTimes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingDeliveryTimesAssignmentTypes[] Returns an array of ShopsMatchingDeliveryTimesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingDeliveryTimesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}