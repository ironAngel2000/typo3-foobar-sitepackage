<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsPriceSchemes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsPriceSchemes>
 *
 * @method ShopsPriceSchemes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsPriceSchemes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsPriceSchemes[]    findAll()
 * @method ShopsPriceSchemes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsPriceSchemesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsPriceSchemes::class);
    }

    public function save(ShopsPriceSchemes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsPriceSchemes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsPriceSchemesAssignmentTypes[] Returns an array of ShopsPriceSchemesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsPriceSchemesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}