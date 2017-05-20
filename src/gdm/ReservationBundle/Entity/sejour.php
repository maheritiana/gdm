<?php

namespace gdm\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sejour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gdm\ReservationBundle\Entity\sejourRepository")
 */
class sejour
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
     * @ORM\Column(name="nbrBillet", type="integer")
     */
    private $nbrBillet;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrJour", type="integer")
     */
    private $nbrJour;


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
     * @return sejour
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
     * Set nbrBillet
     *
     * @param integer $nbrBillet
     * @return sejour
     */
    public function setNbrBillet($nbrBillet)
    {
        $this->nbrBillet = $nbrBillet;
    
        return $this;
    }

    /**
     * Get nbrBillet
     *
     * @return integer 
     */
    public function getNbrBillet()
    {
        return $this->nbrBillet;
    }

    /**
     * Set nbrJour
     *
     * @param integer $nbrJour
     * @return sejour
     */
    public function setNbrJour($nbrJour)
    {
        $this->nbrJour = $nbrJour;
    
        return $this;
    }

    /**
     * Get nbrJour
     *
     * @return integer 
     */
    public function getNbrJour()
    {
        return $this->nbrJour;
    }
}
