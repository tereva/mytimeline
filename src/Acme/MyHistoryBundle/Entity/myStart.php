<?php

namespace Acme\MyHistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * myStart
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class myStart 
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
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;


    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;



    /**
      * @ORM\OneToOne(targetEntity="myEvent2")
      * @ORM\JoinColumn(name="start_event_id", referencedColumnName="id")
      */    
    private $event;

 	

    /**
     * Set event
     *
     * @param \Acme\MyHistoryBundle\Entity\myEvent2 $event
     * @return myStart
     */
    public function setEvent(\Acme\MyHistoryBundle\Entity\myEvent2 $event = null)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \Acme\MyHistoryBundle\Entity\myEvent2 
     */
    public function getEvent()
    {
        return $this->event;
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
     * Set year
     *
     * @param integer $year
     * @return myStart
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return myStart
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }
}