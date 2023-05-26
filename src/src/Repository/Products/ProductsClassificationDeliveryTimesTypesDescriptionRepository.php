<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsClassificationDeliveryTimesTypesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsClassificationDeliveryTimesTypesDescription>
 *
 * @method ProductsClassificationDeliveryTimesTypesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsClassificationDeliveryTimesTypesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsClassificationDeliveryTimesTypesDescription[]    findAll()
 * @method ProductsClassificationDeliveryTimesTypesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsClassificationDeliveryTimesTypesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsClassificationDeliveryTimesTypesDescription::class);
    }

    public function save(ProductsClassificationDeliveryTimesTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsClassificationDeliveryTimesTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsClassificationDeliveryTimesTypesDescriptionAssignmentTypes[] Returns an array of ProductsClassificationDeliveryTimesTypesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsClassificationDeliveryTimesTypesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}