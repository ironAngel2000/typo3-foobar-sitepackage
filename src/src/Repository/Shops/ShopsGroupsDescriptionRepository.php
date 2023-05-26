<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsGroupsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsGroupsDescription>
 *
 * @method ShopsGroupsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsGroupsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsGroupsDescription[]    findAll()
 * @method ShopsGroupsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsGroupsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsGroupsDescription::class);
    }

    public function save(ShopsGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsGroupsDescriptionAssignmentTypes[] Returns an array of ShopsGroupsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsGroupsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}