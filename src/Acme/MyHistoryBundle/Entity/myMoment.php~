<?php

namespace Acme\MyHistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * myMoment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class myMoment
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
     * @ORM\Column(name="myYear", type="integer")
     */
    private $myYear;

    /**
     * @var string
     *
     * @ORM\Column(name="myPlace", type="string", length=255)
     */
    private $myPlace;



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
     * Set myYear
     *
     * @param integer $myYear
     * @return myMoment
     */
    public function setMyYear($myYear)
    {
        $this->myYear = $myYear;
    
        return $this;
    }

    /**
     * Get myYear
     *
     * @return integer 
     */
    public function getMyYear()
    {
        return $this->myYear;
    }

    /**
     * Set myPlace
     *
     * @param string $myPlace
     * @return myMoment
     */
    public function setMyPlace($myPlace)
    {
        $this->myPlace = $myPlace;
    
        return $this;
    }

    /**
     * Get myPlace
     *
     * @return string 
     */
    public function getMyPlace()
    {
        return $this->myPlace;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->startevent = new \Doctrine\Common\Collections\ArrayCollection();
        $this->endevent = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add startevent
     *
     * @param \Acme\MyHistoryBundle\Entity\myEvent $startevent
     * @return myMoment
     */
    public function addStartevent(\Acme\MyHistoryBundle\Entity\myEvent $startevent)
    {
        $this->startevent[] = $startevent;
    
        return $this;
    }

    /**
     * Remove startevent
     *
     * @param \Acme\MyHistoryBundle\Entity\myEvent $startevent
     */
    public function removeStartevent(\Acme\MyHistoryBundle\Entity\myEvent $startevent)
    {
        $this->startevent->removeElement($startevent);
    }

    /**
     * Get startevent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStartevent()
    {
        return $this->startevent;
    }

    /**
     * Add endevent
     *
     * @param \Acme\MyHistoryBundle\Entity\myEvent $endevent
     * @return myMoment
     */
    public function addEndevent(\Acme\MyHistoryBundle\Entity\myEvent $endevent)
    {
        $this->endevent[] = $endevent;
    
        return $this;
    }

    /**
     * Remove endevent
     *
     * @param \Acme\MyHistoryBundle\Entity\myEvent $endevent
     */
    public function removeEndevent(\Acme\MyHistoryBundle\Entity\myEvent $endevent)
    {
        $this->endevent->removeElement($endevent);
    }

    /**
     * Get endevent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEndevent()
    {
        return $this->endevent;
    }
}