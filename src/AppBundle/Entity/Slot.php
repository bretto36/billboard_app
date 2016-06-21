<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 20/06/2016
 * Time: 21:48
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="slot")
 */
class Slot
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Advert", mappedBy="slot")
     */
    private $advert;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Led", inversedBy="slots")
     */
    private $led;

    /**
     * @ORM\Column(type="string")
     */
    private $display_time;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAdvert()
    {
        return $this->advert;
    }
    
    /**
     * @return mixed
     */
    public function getLed()
    {
        return $this->led;
    }

    /**
     * @return mixed
     */
    public function getDisplayTime()
    {
        return $this->display_time;
    }

    /**
     * @param mixed $display_time
     */
    public function setDisplayTime($display_time)
    {
        $this->display_time = $display_time;
    }
}