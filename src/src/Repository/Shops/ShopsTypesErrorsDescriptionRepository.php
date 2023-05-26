<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsTypesErrorsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsTypesErrorsDescription>
 *
 * @method ShopsTypesErrorsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsTypesErrorsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsTypesErrorsDescription[]    findAll()
 * @method ShopsTypesErrorsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsTypesErrorsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsTypesErrorsDescription::class);
    }

    public function save(ShopsTypesErrorsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsTypesErrorsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsTypesErrorsDescriptionAssignmentTypes[] Returns an array of ShopsTypesErrorsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsTypesErrorsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}