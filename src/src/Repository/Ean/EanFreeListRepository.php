<?php

namespace App\Repository\Ean;

use App\Entity\Ean\EanFreeList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EanFreeList>
 *
 * @method EanFreeList|null find($id, $lockMode = null, $lockVersion = null)
 * @method EanFreeList|null findOneBy(array $criteria, array $orderBy = null)
 * @method EanFreeList[]    findAll()
 * @method EanFreeList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EanFreeListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EanFreeList::class);
    }

    public function save(EanFreeList $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EanFreeList $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EanFreeListAssignmentTypes[] Returns an array of EanFreeListAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?EanFreeListAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}