<?php

namespace App\Repository;

use App\Entity\Usercateg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Usercateg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usercateg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usercateg[]    findAll()
 * @method Usercateg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsercategRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usercateg::class);
    }


}
