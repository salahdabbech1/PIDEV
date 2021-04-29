<?php

namespace App\Repository;

use App\Entity\Tactor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tactor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tactor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tactor[]    findAll()
 * @method Tactor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TactorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tactor::class);
    }



    function tri_asc()
    {
        return $this->createQueryBuilder('Tactor')
            ->orderBy('Tactor.name ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('Tactor')
            ->orderBy('Tactor.name ','DESC')
            ->getQuery()->getResult();
    }
    function tri_asc2()
    {
        return $this->createQueryBuilder('Tactor')
            ->select('YEAR(Tactor.born)')
            ->orderBy('Tactor.born','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc2()
    {
        return $this->createQueryBuilder('Tactor')
            ->select('YEAR(Tactor.born)')
            ->orderBy('Tactor.born ','DESC')
            ->getQuery()->getResult();
    }
}
