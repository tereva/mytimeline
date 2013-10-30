<?php

namespace Acme\MyHistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventmono
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Eventmono
{
	//ELEMENTS BASES
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

   //*****************************************
   // START MOMENT 
   //**************************************** 
     /**
     * @var integer
     *
     * @ORM\Column(name="syear", type="integer")
     */
    private $syear;

     /**
     * @var integer
     *
     * @ORM\Column(name="smonth", type="integer")
     */
     private $smonth;

     /**
     * @var integer
     *
     * @ORM\Column(name="sday", type="integer")
     */
     private $sday;

     /**
     * @var time 
     *
     * @ORM\Column(name="stime", type="time")
     */
    private $stime;

     // EARLIEST

     /**
     * @var integer
     *
     * @ORM\Column(name="ersyear", type="integer")
     */
    private $ersyear;

     /**
     * @var integer
     *
     * @ORM\Column(name="ersmonth", type="integer")
     */
     private $ersmonth;

     /**
     * @var integer
     *
     * @ORM\Column(name="ersday", type="integer")
     */
     private $ersday;

     /**
     * @var time 
     *
     * @ORM\Column(name="erstime", type="time")
     */
    private $erstime;

    // START PLACE
    /**
     * @var string
     *
     * @ORM\Column(name="scountry", type="string", length=255)
     */
    private $scountry;

     /**
     * @var string
     *
     * @ORM\Column(name="sstate", type="string", length=255)
     */
    private $sstate;

     /**
     * @var string
     *
     * @ORM\Column(name="scity", type="string", length=255)
     */
   private $scity;



  //*****************************************
   // END MOMENT 
   //**************************************** 
     /**
     * @var integer
     *
     * @ORM\Column(name="eyear", type="integer")
     */
    private $eyear;

     /**
     * @var integer
     *
     * @ORM\Column(name="emonth", type="integer")
     */
     private $emonth;

     /**
     * @var integer
     *
     * @ORM\Column(name="eday", type="integer")
     */
     private $eday;

     /**
     * @var time 
     *
     * @ORM\Column(name="etime", type="time")
     */
    private $etime;

     //LATEST END 

     /**
     * @var integer
     *
     * @ORM\Column(name="laeyear", type="integer")
     */
    private $laeyear;

     /**
     * @var integer
     *
     * @ORM\Column(name="laemonth", type="integer")
     */
     private $laemonth;

     /**
     * @var integer
     *
     * @ORM\Column(name="laeday", type="integer")
     */
     private $laeday;

     /**
     * @var time 
     *
     * @ORM\Column(name="laetime", type="time")
     */
    private $laetime;

    // START PLACE
    /**
     * @var string
     *
     * @ORM\Column(name="ecountry", type="string", length=255)
     */
    private $ecountry;

     /**
     * @var string
     *
     * @ORM\Column(name="estate", type="string", length=255)
     */
    private $estate;

     /**
     * @var string
     *
     * @ORM\Column(name="ecity", type="string", length=255)
     */
   private $ecity;


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
     * Set title
     *
     * @param string $title
     * @return Eventmono
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set syear
     *
     * @param integer $syear
     * @return Eventmono
     */
    public function setSyear($syear)
    {
        $this->syear = $syear;
    
        return $this;
    }

    /**
     * Get syear
     *
     * @return integer 
     */
    public function getSyear()
    {
        return $this->syear;
    }

    /**
     * Set smonth
     *
     * @param integer $smonth
     * @return Eventmono
     */
    public function setSmonth($smonth)
    {
        $this->smonth = $smonth;
    
        return $this;
    }

    /**
     * Get smonth
     *
     * @return integer 
     */
    public function getSmonth()
    {
        return $this->smonth;
    }

    /**
     * Set sday
     *
     * @param integer $sday
     * @return Eventmono
     */
    public function setSday($sday)
    {
        $this->sday = $sday;
    
        return $this;
    }

    /**
     * Get sday
     *
     * @return integer 
     */
    public function getSday()
    {
        return $this->sday;
    }

    /**
     * Set stime
     *
     * @param \DateTime $stime
     * @return Eventmono
     */
    public function setStime($stime)
    {
        $this->stime = $stime;
    
        return $this;
    }

    /**
     * Get stime
     *
     * @return \DateTime 
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * Set ersyear
     *
     * @param integer $ersyear
     * @return Eventmono
     */
    public function setErsyear($ersyear)
    {
        $this->ersyear = $ersyear;
    
        return $this;
    }

    /**
     * Get ersyear
     *
     * @return integer 
     */
    public function getErsyear()
    {
        return $this->ersyear;
    }

    /**
     * Set ersmonth
     *
     * @param integer $ersmonth
     * @return Eventmono
     */
    public function setErsmonth($ersmonth)
    {
        $this->ersmonth = $ersmonth;
    
        return $this;
    }

    /**
     * Get ersmonth
     *
     * @return integer 
     */
    public function getErsmonth()
    {
        return $this->ersmonth;
    }

    /**
     * Set ersday
     *
     * @param integer $ersday
     * @return Eventmono
     */
    public function setErsday($ersday)
    {
        $this->ersday = $ersday;
    
        return $this;
    }

    /**
     * Get ersday
     *
     * @return integer 
     */
    public function getErsday()
    {
        return $this->ersday;
    }

    /**
     * Set erstime
     *
     * @param \DateTime $erstime
     * @return Eventmono
     */
    public function setErstime($erstime)
    {
        $this->erstime = $erstime;
    
        return $this;
    }

    /**
     * Get erstime
     *
     * @return \DateTime 
     */
    public function getErstime()
    {
        return $this->erstime;
    }

    /**
     * Set scountry
     *
     * @param string $scountry
     * @return Eventmono
     */
    public function setScountry($scountry)
    {
        $this->scountry = $scountry;
    
        return $this;
    }

    /**
     * Get scountry
     *
     * @return string 
     */
    public function getScountry()
    {
        return $this->scountry;
    }

    /**
     * Set sstate
     *
     * @param string $sstate
     * @return Eventmono
     */
    public function setSstate($sstate)
    {
        $this->sstate = $sstate;
    
        return $this;
    }

    /**
     * Get sstate
     *
     * @return string 
     */
    public function getSstate()
    {
        return $this->sstate;
    }

    /**
     * Set scity
     *
     * @param string $scity
     * @return Eventmono
     */
    public function setScity($scity)
    {
        $this->scity = $scity;
    
        return $this;
    }

    /**
     * Get scity
     *
     * @return string 
     */
    public function getScity()
    {
        return $this->scity;
    }

    /**
     * Set eyear
     *
     * @param integer $eyear
     * @return Eventmono
     */
    public function setEyear($eyear)
    {
        $this->eyear = $eyear;
    
        return $this;
    }

    /**
     * Get eyear
     *
     * @return integer 
     */
    public function getEyear()
    {
        return $this->eyear;
    }

    /**
     * Set emonth
     *
     * @param integer $emonth
     * @return Eventmono
     */
    public function setEmonth($emonth)
    {
        $this->emonth = $emonth;
    
        return $this;
    }

    /**
     * Get emonth
     *
     * @return integer 
     */
    public function getEmonth()
    {
        return $this->emonth;
    }

    /**
     * Set eday
     *
     * @param integer $eday
     * @return Eventmono
     */
    public function setEday($eday)
    {
        $this->eday = $eday;
    
        return $this;
    }

    /**
     * Get eday
     *
     * @return integer 
     */
    public function getEday()
    {
        return $this->eday;
    }

    /**
     * Set etime
     *
     * @param \DateTime $etime
     * @return Eventmono
     */
    public function setEtime($etime)
    {
        $this->etime = $etime;
    
        return $this;
    }

    /**
     * Get etime
     *
     * @return \DateTime 
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * Set laeyear
     *
     * @param integer $laeyear
     * @return Eventmono
     */
    public function setLaeyear($laeyear)
    {
        $this->laeyear = $laeyear;
    
        return $this;
    }

    /**
     * Get laeyear
     *
     * @return integer 
     */
    public function getLaeyear()
    {
        return $this->laeyear;
    }

    /**
     * Set laemonth
     *
     * @param integer $laemonth
     * @return Eventmono
     */
    public function setLaemonth($laemonth)
    {
        $this->laemonth = $laemonth;
    
        return $this;
    }

    /**
     * Get laemonth
     *
     * @return integer 
     */
    public function getLaemonth()
    {
        return $this->laemonth;
    }

    /**
     * Set laeday
     *
     * @param integer $laeday
     * @return Eventmono
     */
    public function setLaeday($laeday)
    {
        $this->laeday = $laeday;
    
        return $this;
    }

    /**
     * Get laeday
     *
     * @return integer 
     */
    public function getLaeday()
    {
        return $this->laeday;
    }

    /**
     * Set laetime
     *
     * @param \DateTime $laetime
     * @return Eventmono
     */
    public function setLaetime($laetime)
    {
        $this->laetime = $laetime;
    
        return $this;
    }

    /**
     * Get laetime
     *
     * @return \DateTime 
     */
    public function getLaetime()
    {
        return $this->laetime;
    }

    /**
     * Set ecountry
     *
     * @param string $ecountry
     * @return Eventmono
     */
    public function setEcountry($ecountry)
    {
        $this->ecountry = $ecountry;
    
        return $this;
    }

    /**
     * Get ecountry
     *
     * @return string 
     */
    public function getEcountry()
    {
        return $this->ecountry;
    }

    /**
     * Set estate
     *
     * @param string $estate
     * @return Eventmono
     */
    public function setEstate($estate)
    {
        $this->estate = $estate;
    
        return $this;
    }

    /**
     * Get estate
     *
     * @return string 
     */
    public function getEstate()
    {
        return $this->estate;
    }

    /**
     * Set ecity
     *
     * @param string $ecity
     * @return Eventmono
     */
    public function setEcity($ecity)
    {
        $this->ecity = $ecity;
    
        return $this;
    }

    /**
     * Get ecity
     *
     * @return string 
     */
    public function getEcity()
    {
        return $this->ecity;
    }
}