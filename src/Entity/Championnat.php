<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChampionnatRepository")
 */
class Championnat
{
     /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="semaine", type="integer")
     */
    private $semaine;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSemaine", type="integer")
     */
    private $nbSemaine;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * Get the value of semaine
     *
     * @return  int
     */ 
    public function getSemaine()
    {
        return $this->semaine;
    }

    /**
     * Set the value of semaine
     *
     * @param  int  $semaine
     *
     * @return  self
     */ 
    public function setSemaine($semaine)
    {
        $this->semaine = $semaine;

        return $this;
    }


    /**
     * Get the value of nbSemaine
     *
     * @return  int
     */ 
    public function getNbSemaine()
    {
        return $this->nbSemaine;
    }

    /**
     * Set the value of nbSemaine
     *
     * @param  int  $nbSemaine
     *
     * @return  self
     */ 
    public function setNbSemaine(int $nbSemaine)
    {
        $this->nbSemaine = $nbSemaine;

        return $this;
    }
}
