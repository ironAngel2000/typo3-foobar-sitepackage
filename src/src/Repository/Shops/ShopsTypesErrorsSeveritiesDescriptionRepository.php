<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsTypesErrorsSeveritiesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsTypesErrorsSeveritiesDescription>
 *
 * @method ShopsTypesErrorsSeveritiesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsTypesErrorsSeveritiesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsTypesErrorsSeveritiesDescription[]    findAll()
 * @method ShopsTypesErrorsSeveritiesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsTypesErrorsSeveritiesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsTypesErrorsSeveritiesDescription::class);
    }

    public function save(ShopsTypesErrorsSeveritiesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsTypesErrorsSeveritiesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsTypesErrorsSeveritiesDescriptionAssignmentTypes[] Returns an array of ShopsTypesErrorsSeveritiesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsTypesErrorsSeveritiesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}