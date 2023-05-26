<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsVariationsDiffsOptionsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsVariationsDiffsOptionsDescription>
 *
 * @method ProductsVariationsDiffsOptionsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsVariationsDiffsOptionsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsVariationsDiffsOptionsDescription[]    findAll()
 * @method ProductsVariationsDiffsOptionsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsVariationsDiffsOptionsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsVariationsDiffsOptionsDescription::class);
    }

    public function save(ProductsVariationsDiffsOptionsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsVariationsDiffsOptionsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsVariationsDiffsOptionsDescriptionAssignmentTypes[] Returns an array of ProductsVariationsDiffsOptionsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsVariationsDiffsOptionsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}