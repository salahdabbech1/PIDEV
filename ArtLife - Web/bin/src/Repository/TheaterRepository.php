<?php

namespace App\Repository;

use App\Entity\Theatre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Theatre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Theatre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Theatre[]    findAll()
 * @method Theatre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TheatreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Theatre::class);
    }

    // /**
    //  * @return Theatre[] Returns an array of Theatre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Theatre
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    function tri_asc()
    {
        return $this->createQueryBuilder('Theatre')
            ->orderBy('Theatre.name ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('Theatre')
            ->orderBy('Theatre.name ','DESC')
            ->getQuery()->getResult();
    }
    function tri_asc2()
    {
        return $this->createQueryBuilder('Theatre')
            ->orderBy('Theatre.genre ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc2()
    {
        return $this->createQueryBuilder('Theatre')
            ->orderBy('Theatre.genre ','DESC')
            ->getQuery()->getResult();
    }
}
