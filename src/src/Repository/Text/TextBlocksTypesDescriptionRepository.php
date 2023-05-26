<?php

namespace App\Repository\Text;

use App\Entity\Text\TextBlocksTypesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TextBlocksTypesDescription>
 *
 * @method TextBlocksTypesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextBlocksTypesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextBlocksTypesDescription[]    findAll()
 * @method TextBlocksTypesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextBlocksTypesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextBlocksTypesDescription::class);
    }

    public function save(TextBlocksTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TextBlocksTypesDescription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TextBlocksTypesDescriptionAssignmentTypes[] Returns an array of TextBlocksTypesDescriptionAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?TextBlocksTypesDescriptionAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}