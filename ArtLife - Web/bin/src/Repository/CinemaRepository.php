<?php

namespace App\Repository;

use App\Entity\Cinema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cinema|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cinema|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cinema[]    findAll()
 * @method Cinema[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CinemaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cinema::class);
    }



    function tri_asc()
    {
        return $this->createQueryBuilder('Cinema')
            ->orderBy('Cinema.name ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('Cinema')
            ->orderBy('Theatre.name ','DESC')
            ->getQuery()->getResult();
    }
    function tri_asc2()
    {
        return $this->createQueryBuilder('Cinema')
            ->orderBy('Cinema.nbsalle ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc2()
    {
        return $this->createQueryBuilder('Theatre')
            ->orderBy('Theatre.nbsalle ','DESC')
            ->getQuery()->getResult();
    }
}
