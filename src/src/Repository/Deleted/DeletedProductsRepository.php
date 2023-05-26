<?php

namespace App\Repository\Deleted;

use App\Entity\Deleted\DeletedProducts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeletedProducts>
 *
 * @method DeletedProducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeletedProducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeletedProducts[]    findAll()
 * @method DeletedProducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeletedProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeletedProducts::class);
    }

    public function save(DeletedProducts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DeletedProducts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DeletedProductsAssignmentTypes[] Returns an array of DeletedProductsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?DeletedProductsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}