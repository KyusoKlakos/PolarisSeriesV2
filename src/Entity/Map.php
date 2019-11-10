<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapRepository")
 */
class Map
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;


    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string")
     */
    private $image;


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
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }



    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }



    function __toString()
    {
        return $this->nom;
    }
}
