<?php

namespace App\Repository\Products;

use App\Entity\Products\ProductsClassificationDeliveryTimesTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsClassificationDeliveryTimesTypes>
 *
 * @method ProductsClassificationDeliveryTimesTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsClassificationDeliveryTimesTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsClassificationDeliveryTimesTypes[]    findAll()
 * @method ProductsClassificationDeliveryTimesTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsClassificationDeliveryTimesTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsClassificationDeliveryTimesTypes::class);
    }

    public function save(ProductsClassificationDeliveryTimesTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductsClassificationDeliveryTimesTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductsClassificationDeliveryTimesTypesAssignmentTypes[] Returns an array of ProductsClassificationDeliveryTimesTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ProductsClassificationDeliveryTimesTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}