<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomersRepository")
 * @ORM\Table(name="customers")
 */
class Customers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="customerID")
     */
    protected $customerID;

        /**
     * @ORM\Column(type="string", name="firstname", nullable=true)
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string", name="lastname", nullable=true)
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", name="addres", nullable=true)
     */
    protected $address;

    /**
     * @ORM\Column(type="string", name="city", nullable=true)
     */
    protected $city;

    /**
     * @ORM\Column(type="string", name="state", nullable=true)
     */
    protected $state;

    /**
     * @ORM\Column(type="string", name="zip", nullable=true)
     */
    protected $zip;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rooms", inversedBy="customers")
     * @ORM\JoinColumn(name="roomID", referencedColumnName="roomID")
     */
    private $room;
 
    /**
     * @return mixed
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
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
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
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
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    public function getRoom(): ?Rooms
    {
        return $this->room;
    }

    public function setRoom(?Rooms $room): self
    {
        $this->room = $room;

        return $this;
    }
}