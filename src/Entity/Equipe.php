<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
 */
class Equipe
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Division")
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="victoires", type="integer")
     */
    private $victoires = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="defaites", type="integer")
     */
    private $defaites = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="victoireMap", type="integer")
     */
    private $victoireMap = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="defaiteMap", type="integer")
     */
    private $defaiteMap = 0;


    /**
     * @var int
     *
     * @ORM\Column(name="nulMap", type="integer")
     */
    private $nulMap = 0;

    /**
     * @var string
     * @ORM\Column(name="capitaine", type="string")
     */
    private $capitaine;

     /**
     * @var string
     * @ORM\Column(name="discord", type="string")
     */
    private $discord;

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
     * @return mixed
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param mixed $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getVictoires()
    {
        return $this->victoires;
    }

    /**
     * @param int $victoires
     */
    public function setVictoires($victoires)
    {
        $this->victoires = $victoires;
    }


    /**
     * @return int
     */
    public function getDefaites()
    {
        return $this->defaites;
    }

    /**
     * @param int $defaites
     */
    public function setDefaites($defaites)
    {
        $this->defaites = $defaites;
    }

    /**
     * @return int
     */
    public function getVictoireMap()
    {
        return $this->victoireMap;
    }

    /**
     * @param int $victoireMap
     */
    public function setVictoireMap($victoireMap)
    {
        $this->victoireMap = $victoireMap;
    }

    /**
     * @return int
     */
    public function getDefaiteMap()
    {
        return $this->defaiteMap;
    }

    /**
     * @param int $defaiteMap
     */
    public function setDefaiteMap($defaiteMap)
    {
        $this->defaiteMap = $defaiteMap;
    }

    /**
     * @return int
     */
    public function getNulMap()
    {
        return $this->nulMap;
    }

    /**
     * @param int $nulMap
     */
    public function setNulMap($nulMap)
    {
        $this->nulMap = $nulMap;
    }

    
    /**
     * Get the value of capitaine
     *
     * @return  string
     */ 
    public function getCapitaine()
    {
        return $this->capitaine;
    }

    /**
     * Set the value of capitaine
     *
     * @param  string  $capitaine
     *
     * @return  self
     */ 
    public function setCapitaine(string $capitaine)
    {
        $this->capitaine = $capitaine;

        return $this;
    }

    /**
     * Get the value of discord
     *
     * @return  string
     */ 
    public function getDiscord()
    {
        return $this->discord;
    }

    /**
     * Set the value of discord
     *
     * @param  string  $discord
     *
     * @return  self
     */ 
    public function setDiscord(string $discord)
    {
        $this->discord = $discord;

        return $this;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
}
