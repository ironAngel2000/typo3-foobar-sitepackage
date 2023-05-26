<?php

namespace App\Repository\Shops;

use App\Entity\Shops\ShopsStatesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShopsStatesDescription>
 *
 * @method ShopsStatesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopsStatesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopsStatesDescription[]    findAll()
 * @method ShopsStatesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopsStatesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShopsStatesDescription::class);
    }

    public function save(ShopsStatesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShopsStatesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ShopsStatesDescriptionAssignmentTypes[] Returns an array of ShopsStatesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?ShopsStatesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}