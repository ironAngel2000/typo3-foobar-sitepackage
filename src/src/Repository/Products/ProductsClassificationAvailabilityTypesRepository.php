<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsClassificationAvailabilityTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsClassificationAvailabilityTypes>
 *
 * @method ProductsClassificationAvailabilityTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsClassificationAvailabilityTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsClassificationAvailabilityTypes[]    findAll()
 * @method ProductsClassificationAvailabilityTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsClassificationAvailabilityTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsClassificationAvailabilityTypes::class);
    }

    public function save(ProductsClassificationAvailabilityTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsClassificationAvailabilityTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsClassificationAvailabilityTypesAssignmentTypes[] Returns an array of ProductsClassificationAvailabilityTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsClassificationAvailabilityTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}