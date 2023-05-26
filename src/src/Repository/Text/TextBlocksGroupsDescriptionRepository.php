<?php

namespace App\Repository\Text;

use App\Entity\Text\TextBlocksGroupsDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TextBlocksGroupsDescription>
 *
 * @method TextBlocksGroupsDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextBlocksGroupsDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextBlocksGroupsDescription[]    findAll()
 * @method TextBlocksGroupsDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextBlocksGroupsDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextBlocksGroupsDescription::class);
    }

    public function save(TextBlocksGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TextBlocksGroupsDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TextBlocksGroupsDescriptionAssignmentTypes[] Returns an array of TextBlocksGroupsDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TextBlocksGroupsDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}