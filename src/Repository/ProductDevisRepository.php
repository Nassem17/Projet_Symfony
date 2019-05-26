<?php

namespace App\Repository;

use App\Entity\ProductDevis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProductDevis|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductDevis|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductDevis[]    findAll()
 * @method ProductDevis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductDevisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductDevis::class);
    }

    // /**
    //  * @return ProductDevis[] Returns an array of ProductDevis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProductDevis
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
