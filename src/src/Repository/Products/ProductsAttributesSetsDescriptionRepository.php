<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsAttributesSetsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsAttributesSetsDescription>
 *
 * @method ProductsAttributesSetsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsAttributesSetsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsAttributesSetsDescription[]    findAll()
 * @method ProductsAttributesSetsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsAttributesSetsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsAttributesSetsDescription::class);
    }

    public function save(ProductsAttributesSetsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsAttributesSetsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsAttributesSetsDescriptionAssignmentTypes[] Returns an array of ProductsAttributesSetsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsAttributesSetsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}