<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapPoolRepository")
 */
class MapPool
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map1;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map2;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map3;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map4;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $tieBreaker;

    /**
     * @var int
     *
     * @ORM\Column(name="num_semaine", type="integer")
     */
    private $numSemaine;


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
     * Get the value of tieBreaker
     */ 
    public function getTieBreaker()
    {
        return $this->tieBreaker;
    }

    /**
     * Set the value of tieBreaker
     *
     * @return  self
     */ 
    public function setTieBreaker($tieBreaker)
    {
        $this->tieBreaker = $tieBreaker;

        return $this;
    }

    /**
     * Get the value of numSemaine
     *
     * @return  int
     */ 
    public function getNumSemaine()
    {
        return $this->numSemaine;
    }

    /**
     * Set the value of numSemaine
     *
     * @param  int  $numSemaine
     *
     * @return  self
     */ 
    public function setNumSemaine(int $numSemaine)
    {
        $this->numSemaine = $numSemaine;

        return $this;
    }

    /**
     * Get the value of map1
     */ 
    public function getMap1()
    {
        return $this->map1;
    }

    /**
     * Set the value of map1
     *
     * @return  self
     */ 
    public function setMap1($map1)
    {
        $this->map1 = $map1;

        return $this;
    }

    /**
     * Get the value of map2
     */ 
    public function getMap2()
    {
        return $this->map2;
    }

    /**
     * Set the value of map2
     *
     * @return  self
     */ 
    public function setMap2($map2)
    {
        $this->map2 = $map2;

        return $this;
    }

    /**
     * Get the value of map3
     */ 
    public function getMap3()
    {
        return $this->map3;
    }

    /**
     * Set the value of map3
     *
     * @return  self
     */ 
    public function setMap3($map3)
    {
        $this->map3 = $map3;

        return $this;
    }

    /**
     * Get the value of map4
     */ 
    public function getMap4()
    {
        return $this->map4;
    }

    /**
     * Set the value of map4
     *
     * @return  self
     */ 
    public function setMap4($map4)
    {
        $this->map4 = $map4;

        return $this;
    }
}
