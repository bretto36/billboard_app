<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 20/06/2016
 * Time: 21:48
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SlotRepository")
 * @ORM\Table(name="slot")
 * @Vich\Uploadable
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
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\SlotSchedule", mappedBy="slot")
     */
    private $slot_schedules;

    public function __construct()
    {
        $this->slot_schedules = new ArrayCollection();
    }


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
     * @return arrayCollection|SlotSchedule[]
     */
    public function getSlotSchedules()
    {
        return $this->slot_schedules;
    }
    




    


}