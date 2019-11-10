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
}
