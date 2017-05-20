<?php

namespace gdm\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gdm\ReservationBundle\Entity\BilletRepository")
 */
class Billet
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBillet", type="integer")
     */
    private $nbBillet;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Billet
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbBillet
     *
     * @param integer $nbBillet
     * @return Billet
     */
    public function setNbBillet($nbBillet)
    {
        $this->nbBillet = $nbBillet;
    
        return $this;
    }

    /**
     * Get nbBillet
     *
     * @return integer 
     */
    public function getNbBillet()
    {
        return $this->nbBillet;
    }
}
