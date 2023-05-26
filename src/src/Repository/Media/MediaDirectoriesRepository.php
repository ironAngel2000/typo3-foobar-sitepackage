<?php

namespace App\Repository\Media;

use App\Entity\Media\MediaDirectories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MediaDirectories>
 *
 * @method MediaDirectories|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaDirectories|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaDirectories[]    findAll()
 * @method MediaDirectories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaDirectoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaDirectories::class);
    }

    public function save(MediaDirectories $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MediaDirectories $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MediaDirectoriesAssignmentTypes[] Returns an array of MediaDirectoriesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?MediaDirectoriesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}