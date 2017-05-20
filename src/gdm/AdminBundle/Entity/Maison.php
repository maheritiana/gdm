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
     * @ORM\Column(name="nbrTrano", type="integer")
     */
    private $nbrTrano;


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
     * @return Trano
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
     * Set nbrTrano
     *
     * @param integer $nbrTrano
     * @return Trano
     */
    public function setNbrTrano($nbrTrano)
    {
        $this->nbrTrano = $nbrTrano;
    
        return $this;
    }

    /**
     * Get nbrTrano
     *
     * @return integer 
     */
    public function getNbrTrano()
    {
        return $this->nbrTrano;
    }
}
