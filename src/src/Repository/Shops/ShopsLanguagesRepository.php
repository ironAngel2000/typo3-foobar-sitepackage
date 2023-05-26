<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsLanguages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsLanguages>
 *
 * @method ShopsLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsLanguages[]    findAll()
 * @method ShopsLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsLanguages::class);
    }

    public function save(ShopsLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsLanguages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsLanguagesAssignmentTypes[] Returns an array of ShopsLanguagesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsLanguagesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}