<?php

namespace gdm\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * boutique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gdm\AdminBundle\Entity\boutiqueRepository")
 */
class boutique
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
     * @var string
     *
     * @ORM\Column(name="nomBoutique", type="string", length=255)
     */
    private $nomBoutique;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionB", type="string", length=255)
     */
    private $descriptionB;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\OneToOne(targetEntity="gdm\AdminBundle\Entity\image",cascade={"persist", "remove"})
     */
    private $image;


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
     * Set nomBoutique
     *
     * @param string $nomBoutique
     * @return boutique
     */
    public function setNomBoutique($nomBoutique)
    {
        $this->nomBoutique = $nomBoutique;
    
        return $this;
    }

    /**
     * Get nomBoutique
     *
     * @return string 
     */
    public function getNomBoutique()
    {
        return $this->nomBoutique;
    }

    /**
     * Set descriptionB
     *
     * @param string $descriptionB
     * @return boutique
     */
    public function setDescriptionB($descriptionB)
    {
        $this->descriptionB = $descriptionB;
    
        return $this;
    }

    /**
     * Get descriptionB
     *
     * @return string 
     */
    public function getDescriptionB()
    {
        return $this->descriptionB;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return boutique
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set image
     *
     * @param \gdm\AdminBundle\Entity\image $image
     * @return boutique
     */
    public function setImage(\gdm\AdminBundle\Entity\image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \gdm\AdminBundle\Entity\image 
     */
    public function getImage()
    {
        return $this->image;
    }
}