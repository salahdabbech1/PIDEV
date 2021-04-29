<?php

namespace App\Repository;

use App\Entity\Factor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Factor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Factor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Factor[]    findAll()
 * @method Factor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Factor::class);
    }

    // /**
    //  * @return Factor[] Returns an array of Factor objects
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
    public function findOneBySomeField($value): ?Factor
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findactorfilm(int $id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT film_id
                FROM film_actors
                INNER JOIN factor
                ON factor.id = film_actors.factor_id WHERE id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }

    public function findactorfilm2($id): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM `film` WHERE ';
        $sqll='';
        foreach($id as $i){
            $sqll.='(`id` ='.$i.') or';
        }
        $sqll=substr_replace($sqll, "", -2);
        $sql=$sql.$sqll;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }



}
