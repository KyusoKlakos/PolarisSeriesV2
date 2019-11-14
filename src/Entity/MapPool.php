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
    private $map5;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map6;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map7;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map8;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map")
     */
    private $map9;

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
     * @ORM\Column(type="boolean")
     */
    private $playoff = false;


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

    /**
     * Get the value of map4
     */ 
    public function getMap5()
    {
        return $this->map5;
    }

    /**
     * Set the value of map4
     *
     * @return  self
     */ 
    public function setMap5($map4)
    {
        $this->map5 = $map4;

        return $this;
    }

    /**
     * Get the value of map4
     */ 
    public function getMap6()
    {
        return $this->map6;
    }

    /**
     * Set the value of map4
     *
     * @return  self
     */ 
    public function setMap6($map4)
    {
        $this->map6 = $map4;

        return $this;
    }

    /**
     * Get the value of map4
     */ 
    public function getMap7()
    {
        return $this->map7;
    }

    /**
     * Set the value of map4
     *
     * @return  self
     */ 
    public function setMap7($map4)
    {
        $this->map7 = $map4;

        return $this;
    }

    /**
     * Get the value of map4
     */ 
    public function getMap8()
    {
        return $this->map8;
    }

    /**
     * Set the value of map4
     *
     * @return  self
     */ 
    public function setMap8($map4)
    {
        $this->map8 = $map4;

        return $this;
    }

    /**
     * Get the value of map4
     */ 
    public function getMap9()
    {
        return $this->map9;
    }

    /**
     * Set the value of map4
     *
     * @return  self
     */ 
    public function setMap9($map4)
    {
        $this->map9 = $map4;

        return $this;
    }

    public function getPlayoff(): ?bool
    {
        return $this->playoff;
    }

    public function setPlayoff(bool $playoff): self
    {
        $this->playoff = $playoff;

        return $this;
    }
}
