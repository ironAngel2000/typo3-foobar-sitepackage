<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsProductsVariationsAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsProductsVariationsAttributes>
 *
 * @method ShopsProductsVariationsAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsProductsVariationsAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsProductsVariationsAttributes[]    findAll()
 * @method ShopsProductsVariationsAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsProductsVariationsAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsProductsVariationsAttributes::class);
    }

    public function save(ShopsProductsVariationsAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsProductsVariationsAttributes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsProductsVariationsAttributesAssignmentTypes[] Returns an array of ShopsProductsVariationsAttributesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsProductsVariationsAttributesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}