<?php

namespace Acme\MyHistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * myEvent
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class myEvent
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
     * @ORM\Column(name="mytitle", type="string", length=255)
     */
    private $mytitle;
 
   /**
    * @ORM\OneToOne(targetEntity="myMoment" , cascade={"persist"})
    * @ORM\JoinColumn(name="start_id", referencedColumnName="id")
    */
    private $startdate;

   /**
    * @ORM\OneToOne(targetEntity="myMoment", cascade={"persist"})
    * @ORM\JoinColumn(name="end_id", referencedColumnName="id")
    */
    private $endate;


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
     * Set mytitle
     *
     * @param string $mytitle
     * @return myEvent
     */
    public function setMytitle($mytitle)
    {
        $this->mytitle = $mytitle;
    
        return $this;
    }

    /**
     * Get mytitle
     *
     * @return string 
     */
    public function getMytitle()
    {
        return $this->mytitle;
    }

   
    /**
     * Set endate
     *
     * @param \Acme\MyHistoryBundle\Entity\myMoment $endate
     * @return myEvent
     */
    public function setEndate(\Acme\MyHistoryBundle\Entity\myMoment $endate = null)
    {
        $this->endate = $endate;
    
        return $this;
    }

    /**
     * Get endate
     *
     * @return \Acme\MyHistoryBundle\Entity\myMoment 
     */
    public function getEndate()
    {
        return $this->endate;
    }

    /**
     * Set startdate
     *
     * @param \Acme\MyHistoryBundle\Entity\myMoment $startdate
     * @return myEvent
     */
    public function setStartdate(\Acme\MyHistoryBundle\Entity\myMoment $startdate = null)
    {
        $this->startdate = $startdate;
    
        return $this;
    }

    /**
     * Get startdate
     *
     * @return \Acme\MyHistoryBundle\Entity\myMoment 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }
}