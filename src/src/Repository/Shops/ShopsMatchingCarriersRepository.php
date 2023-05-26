<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsMatchingCarriers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsMatchingCarriers>
 *
 * @method ShopsMatchingCarriers|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsMatchingCarriers|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsMatchingCarriers[]    findAll()
 * @method ShopsMatchingCarriers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsMatchingCarriersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsMatchingCarriers::class);
    }

    public function save(ShopsMatchingCarriers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsMatchingCarriers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsMatchingCarriersAssignmentTypes[] Returns an array of ShopsMatchingCarriersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsMatchingCarriersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}