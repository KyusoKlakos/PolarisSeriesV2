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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $datesSemaines;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $datesNextSemaines;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heroBanS1;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heroBanS2;



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

    public function getDatesSemaines(): ?string
    {
        return $this->datesSemaines;
    }

    public function setDatesSemaines(?string $datesSemaines): self
    {
        $this->datesSemaines = $datesSemaines;

        return $this;
    }

    public function getDatesNextSemaines(): ?string
    {
        return $this->datesNextSemaines;
    }

    public function setDatesNextSemaines(?string $datesNextSemaines): self
    {
        $this->datesNextSemaines = $datesNextSemaines;

        return $this;
    }

    public function getHeroBanS1(): ?string
    {
        return $this->heroBanS1;
    }

    public function setHeroBanS1(?string $datesNextSemaines): self
    {
        $this->heroBanS1 = $datesNextSemaines;

        return $this;
    }

    public function getHeroBanS2(): ?string
    {
        return $this->heroBanS2;
    }

    public function setHeroBanS2(?string $datesNextSemaines): self
    {
        $this->heroBanS2 = $datesNextSemaines;

        return $this;
    }
}
