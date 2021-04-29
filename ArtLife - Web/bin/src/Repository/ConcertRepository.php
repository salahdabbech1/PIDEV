<?php


namespace App\Repository;
use App\Entity\Concert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
/**
 * @method Concert|null find($id, $lockMode = null, $lockVersion = null)
 * @method Concert|null findOneBy(array $criteria, array $orderBy = null)
 * @method Concert[]    findAll()
 * @method Concert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConcertRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Concert::class);
    }

    function tri_asc()
    {
        return $this->createQueryBuilder('Concert')
            ->orderBy('Concert.name ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('Concert')
            ->orderBy('Concert.name ','DESC')
            ->getQuery()->getResult();
    }
    function tri_asc2()
    {
        return $this->createQueryBuilder('Concert')
            ->orderBy('Concert.idmusician ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc2()
    {
        return $this->createQueryBuilder('Concert')
            ->orderBy('Concert.idmusician ','DESC')
            ->getQuery()->getResult();
    }
    // /**
    //  * @return Concert[] Returns an array of Concert objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Concert
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}