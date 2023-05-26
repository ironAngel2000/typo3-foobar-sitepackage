<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfMenusUrls;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfMenusUrls>
 *
 * @method BfMenusUrls|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfMenusUrls|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfMenusUrls[]    findAll()
 * @method BfMenusUrls[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfMenusUrlsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfMenusUrls::class);
    }

    public function save(BfMenusUrls $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfMenusUrls $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfMenusUrlsAssignmentTypes[] Returns an array of BfMenusUrlsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfMenusUrlsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}