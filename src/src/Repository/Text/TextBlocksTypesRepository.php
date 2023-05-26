<?php

namespace App\Repository\Text;

use App\Entity\Text\TextBlocksTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TextBlocksTypes>
 *
 * @method TextBlocksTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextBlocksTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextBlocksTypes[]    findAll()
 * @method TextBlocksTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextBlocksTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextBlocksTypes::class);
    }

    public function save(TextBlocksTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TextBlocksTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TextBlocksTypesAssignmentTypes[] Returns an array of TextBlocksTypesAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TextBlocksTypesAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}