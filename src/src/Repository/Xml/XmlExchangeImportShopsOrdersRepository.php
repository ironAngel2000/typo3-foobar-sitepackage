<?php

namespace App\Repository\Xml;

use App\Entity\Xml\XmlExchangeImportShopsOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<XmlExchangeImportShopsOrders>
 *
 * @method XmlExchangeImportShopsOrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method XmlExchangeImportShopsOrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method XmlExchangeImportShopsOrders[]    findAll()
 * @method XmlExchangeImportShopsOrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class XmlExchangeImportShopsOrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, XmlExchangeImportShopsOrders::class);
    }

    public function save(XmlExchangeImportShopsOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(XmlExchangeImportShopsOrders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return XmlExchangeImportShopsOrdersAssignmentTypes[] Returns an array of XmlExchangeImportShopsOrdersAssignmentTypes objects
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

//    public function findOneBySomeField($value): ?XmlExchangeImportShopsOrdersAssignmentTypes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}