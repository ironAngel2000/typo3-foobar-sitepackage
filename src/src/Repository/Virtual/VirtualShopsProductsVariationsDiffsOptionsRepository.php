<?php

namespace App\Repository\Virtual;

use App\Entity\Virtual\VirtualShopsProductsVariationsDiffsOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VirtualShopsProductsVariationsDiffsOptions>
 *
 * @method VirtualShopsProductsVariationsDiffsOptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method VirtualShopsProductsVariationsDiffsOptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method VirtualShopsProductsVariationsDiffsOptions[]    findAll()
 * @method VirtualShopsProductsVariationsDiffsOptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VirtualShopsProductsVariationsDiffsOptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VirtualShopsProductsVariationsDiffsOptions::class);
    }

    public function save(VirtualShopsProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VirtualShopsProductsVariationsDiffsOptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return VirtualShopsProductsVariationsDiffsOptionsAssignmentTypes[] Returns an array of VirtualShopsProductsVariationsDiffsOptionsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?VirtualShopsProductsVariationsDiffsOptionsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}