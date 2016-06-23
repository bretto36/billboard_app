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
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SlotRepository")
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Led", inversedBy="slots")
     */
    private $led;

    /**
     * @ORM\Column(type="string")
     */
    private $display_time;

    /**
     * @ORM\Column(type="text")
     */
    private $image;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $applied;

    /**
     * @ORM\Column(type="boolean")
     */
    private $finalized;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $start_time;

    /**
     * @ORM\Column(type="datetime", nullable=true)
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

    public function __toString()
    {
        return $this->getName();
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