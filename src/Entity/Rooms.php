<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomsRepository")
 * @ORM\Table(name="rooms")
 */

class Rooms
{
    /**
     * @ORM\Column(type="integer", name="roomnumber", nullable=true)
     */
    protected $roomnumber;

	/**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="roomID")
     */
    protected $roomID;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Customers", mappedBy="room")
     */
    private $customers;

    public function __construct()
    {
        $this->customers = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getRoomnumber()
    {
        return $this->roomnumber;
    }

    /**
     * @param mixed $roomnumber
     *
     * @return self
     */
    public function setRoomnumber($roomnumber)
    {
        $this->roomnumber = $roomnumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoomID()
    {
        return $this->roomID;
    }

    /**
     * @return Collection|Customers[]
     */
    public function getCustomers(): Collection
    {
        return $this->customers;
    }

    public function addCustomer(Customers $customer): self
    {
        if (!$this->customers->contains($customer)) {
            $this->customers[] = $customer;
            $customer->setRoom($this);
        }

        return $this;
    }

    public function removeCustomer(Customers $customer): self
    {
        if ($this->customers->contains($customer)) {
            $this->customers->removeElement($customer);
            // set the owning side to null (unless already changed)
            if ($customer->getRoom() === $this) {
                $customer->setRoom(null);
            }
        }

        return $this;
    }
}