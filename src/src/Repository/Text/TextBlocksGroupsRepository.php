<?php

namespace App\Repository\Text;

use App\Entity\Text\TextBlocksGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TextBlocksGroups>
 *
 * @method TextBlocksGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextBlocksGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextBlocksGroups[]    findAll()
 * @method TextBlocksGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextBlocksGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextBlocksGroups::class);
    }

    public function save(TextBlocksGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TextBlocksGroups $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TextBlocksGroupsAssignmentTypes[] Returns an array of TextBlocksGroupsAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TextBlocksGroupsAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}