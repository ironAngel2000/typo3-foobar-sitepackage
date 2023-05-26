<?php

namespace App\Repository\Bf;

use App\Entity\Bf\BfMenusLanguages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BfMenusLanguages>
 *
 * @method BfMenusLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfMenusLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfMenusLanguages[]    findAll()
 * @method BfMenusLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfMenusLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfMenusLanguages::class);
    }

    public function save(BfMenusLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BfMenusLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BfMenusLanguagesAssignmentTypes[] Returns an array of BfMenusLanguagesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?BfMenusLanguagesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}