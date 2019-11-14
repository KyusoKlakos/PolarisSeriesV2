<?php

namespace App\Repository;

use App\Entity\Division;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use App\Entity\Equipe;


/**
 * @method Division|null find($id, $lockMode = null, $lockVersion = null)
 * @method Division|null findOneBy(array $criteria, array $orderBy = null)
 * @method Division[]    findAll()
 * @method Division[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DivisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Division::class);
    }

    public function findDivAvecEquipe(){
        $query = $this->_em->createQuery('SELECT d FROM App\Entity\Division d WHERE EXISTS (SELECT e FROM App\Entity\Equipe e WHERE e.division = d.id)');
        $result = $query->getResult();
        return $result;
    }

    public function findDivAvecEquipePlayoff(){
        $query = $this->_em->createQuery('SELECT d FROM App\Entity\Division d WHERE EXISTS (SELECT e FROM App\Entity\Equipe e WHERE e.divisionPlayoff = d.id)');
        $result = $query->getResult();
        return $result;
    }

   
}
