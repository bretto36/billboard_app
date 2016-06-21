<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 20/06/2016
 * Time: 21:39
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="advert")
 */
class Advert
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $image;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Slot", inversedBy="advert")
     */
    private $slot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $applied;

    /**
     * @ORM\Column(type="boolean")
     */
    private $finalized;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_time;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end_time;

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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return 
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * @param mixed $slot
     */
    public function setSlot(Slot $slot)
    {
        $this->slot = $slot;
    }

    /**
     * @return mixed
     */
    public function getApplied()
    {
        return $this->applied;
    }

    /**
     * @param mixed $applied
     */
    public function setApplied($applied)
    {
        $this->applied = $applied;
    }

    /**
     * @return mixed
     */
    public function getFinalized()
    {
        return $this->finalized;
    }

    /**
     * @param mixed $finalized
     */
    public function setFinalized($finalized)
    {
        $this->finalized = $finalized;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * @param mixed $start_time
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * @param mixed $end_time
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
    }






}