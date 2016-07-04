<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 03/07/2016
 * Time: 11:34
 */

namespace AppBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SlotScheduleRepository")
 * @ORM\Table(name="slot_schedule")
 */
class SlotSchedule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $start_time;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     *
     */
    private $end_time;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(message="Please upload the image you want to advertise")
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png", "image/bmp" })
     */
    private $image;

    /**
     * @ORM\Column(type="boolean", options={"default":0}, nullable=false)
     */
    private $applied;

    /**
     * @ORM\Column(type="boolean", options={"default":0}, nullable=false)
     */
    private $finalized;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Slot", inversedBy="slot_schedules")
     */
    private $slot;

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
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * @param mixed $slot
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;
    }



}