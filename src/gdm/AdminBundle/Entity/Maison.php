<?php

namespace gdm\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gdm\AdminBundle\Entity\MaisonRepository")
 */
class Maison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dispo", type="boolean")
     */
    private $dispo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrMaison", type="integer")
     */
    private $nbrMaison;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dispo = true;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dispo
     *
     * @param boolean $dispo
     * @return Maison
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;
    
        return $this;
    }

    /**
     * Get dispo
     *
     * @return boolean 
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Set nbrMaison
     *
     * @param integer $nbrMaison
     * @return Maison
     */
    public function setNbrMaison($nbrMaison)
    {
        $this->nbrMaison = $nbrMaison;
    
        return $this;
    }

    /**
     * Get nbrMaison
     *
     * @return integer 
     */
    public function getNbrMaison()
    {
        return $this->nbrMaison;
    }
}
