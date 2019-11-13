<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RencontreRepository")
 */
class Rencontre
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipe")
     */
    private $equipeDom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipe")
     */
    private $equipeExt;

    /**
     * @var int
     *
     * @ORM\Column(name="num_semaine", type="integer")
     */
    private $numSemaine;

    /**
     * @ORM\Column(type="boolean")
     */
    private $jouer = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $victoire_dom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $score_dom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $score_ext;

    

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
    public function getEquipeDom()
    {
        return $this->equipeDom;
    }

    /**
     * @param mixed $equipeDom
     */
    public function setEquipeDom($equipeDom)
    {
        $this->equipeDom = $equipeDom;
    }

    /**
     * @return mixed
     */
    public function getEquipeExt()
    {
        return $this->equipeExt;
    }

    /**
     * @param mixed $equipeExt
     */
    public function setEquipeExt($equipeExt)
    {
        $this->equipeExt = $equipeExt;
    }

    /**
     * @return int
     */
    public function getNumSemaine()
    {
        return $this->numSemaine;
    }

    /**
     * @param int $numSemaine
     */
    public function setNumSemaine($numSemaine)
    {
        $this->numSemaine = $numSemaine;
    }

    public function getJouer(): ?bool
    {
        return $this->jouer;
    }

    public function setJouer(bool $jouer): self
    {
        $this->jouer = $jouer;

        return $this;
    }

    public function getVictoireDom(): ?bool
    {
        return $this->victoire_dom;
    }

    public function setVictoireDom(?bool $victoire_dom): self
    {
        $this->victoire_dom = $victoire_dom;

        return $this;
    }

    public function getScoreDom(): ?int
    {
        return $this->score_dom;
    }

    public function setScoreDom(?int $score_dom): self
    {
        $this->score_dom = $score_dom;

        return $this;
    }

    public function getScoreExt(): ?int
    {
        return $this->score_ext;
    }

    public function setScoreExt(int $score_ext): self
    {
        $this->score_ext = $score_ext;

        return $this;
    }
}
