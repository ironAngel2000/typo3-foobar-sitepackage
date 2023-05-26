<?php

namespace App\Repository\Text;

use App\Entity\Text\TextBlocks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TextBlocks>
 *
 * @method TextBlocks|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextBlocks|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextBlocks[]    findAll()
 * @method TextBlocks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextBlocksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextBlocks::class);
    }

    public function save(TextBlocks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TextBlocks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TextBlocksAssignmentTypes[] Returns an array of TextBlocksAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TextBlocksAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}