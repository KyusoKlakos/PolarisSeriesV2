<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GagnantSaisonRepository")
 */
class GagnantSaison
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $saison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomEquipe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $j1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $j2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $j3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $j4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $j5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $j6;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $desc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSaison(): ?string
    {
        return $this->saison;
    }

    public function setSaison(string $saison): self
    {
        $this->saison = $saison;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(string $saison): self
    {
        $this->desc = $saison;

        return $this;
    }


    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $saison): self
    {
        $this->img = $saison;

        return $this;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nomEquipe;
    }

    public function setNomEquipe(string $nomEquipe): self
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    public function getJ1(): ?string
    {
        return $this->j1;
    }

    public function setJ1(string $j1): self
    {
        $this->j1 = $j1;

        return $this;
    }

    public function getJ2(): ?string
    {
        return $this->j2;
    }

    public function setJ2(string $j2): self
    {
        $this->j2 = $j2;

        return $this;
    }

    public function getJ3(): ?string
    {
        return $this->j3;
    }

    public function setJ3(string $j3): self
    {
        $this->j3 = $j3;

        return $this;
    }

    public function getJ4(): ?string
    {
        return $this->j4;
    }

    public function setJ4(string $j4): self
    {
        $this->j4 = $j4;

        return $this;
    }

    public function getJ5(): ?string
    {
        return $this->j5;
    }

    public function setJ5(string $j5): self
    {
        $this->j5 = $j5;

        return $this;
    }

    public function getJ6(): ?string
    {
        return $this->j6;
    }

    public function setJ6(string $j6): self
    {
        $this->j6 = $j6;

        return $this;
    }

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(string $division): self
    {
        $this->division = $division;

        return $this;
    }
}
