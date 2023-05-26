<?php

namespace App\Repository\Deleted;

use App\Entity\Deleted\DeletedProductsVariations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeletedProductsVariations>
 *
 * @method DeletedProductsVariations|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeletedProductsVariations|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeletedProductsVariations[]    findAll()
 * @method DeletedProductsVariations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeletedProductsVariationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeletedProductsVariations::class);
    }

    public function save(DeletedProductsVariations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DeletedProductsVariations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DeletedProductsVariationsAssignmentTypes[] Returns an array of DeletedProductsVariationsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?DeletedProductsVariationsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}