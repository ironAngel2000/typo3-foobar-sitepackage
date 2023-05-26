<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingDeliveryTimesAddInfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingDeliveryTimesAddInfos>
 *
 * @method ShopsMatchingDeliveryTimesAddInfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingDeliveryTimesAddInfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingDeliveryTimesAddInfos[]    findAll()
 * @method ShopsMatchingDeliveryTimesAddInfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingDeliveryTimesAddInfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingDeliveryTimesAddInfos::class);
    }

    public function save(ShopsMatchingDeliveryTimesAddInfos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingDeliveryTimesAddInfos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingDeliveryTimesAddInfosAssignmentTypes[] Returns an array of ShopsMatchingDeliveryTimesAddInfosAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingDeliveryTimesAddInfosAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}