<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 20/06/2016
 * Time: 21:50
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SlotScheduleRepository")
 * @ORM\Table(name="led")
 * @Vich\Uploadable
 */
class Led
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $country;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $city;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $address;

    /**
     * @ORM\Column(type="decimal", precision=19, scale=4, nullable=false)
     */
    private $latitude;

    /**
     * @ORM\Column(type="decimal", precision=19, scale=4, nullable=false)
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="Slot", mappedBy="led")
     */
    private $slots;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $starting_cost;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $areaDescription;

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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return arrayCollection|Slot[]
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStartingCost()
    {
        return $this->starting_cost;
    }

    /**
     * @param mixed $starting_cost
     */
    public function setStartingCost($starting_cost)
    {
        $this->starting_cost = $starting_cost;
    }

    /**
     * @return mixed
     */
    public function getAreaDescription()
    {
        return $this->areaDescription;
    }

    /**
     * @param mixed $areaDescription
     */
    public function setAreaDescription($areaDescription)
    {
        $this->areaDescription = $areaDescription;
    }



}