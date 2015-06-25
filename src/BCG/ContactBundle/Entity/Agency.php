<?php

namespace BCG\ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="agencies")
 * @ORM\HasLifecycleCallbacks
 */
class Agency
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @ORM\Column(type="string")
	*/
    protected $name;

    /**
	* @ORM\Column(type="string")
	*/
    protected $phone;

    /**
	* @ORM\Column(type="string")
	*/
    protected $email;

    /**
	* @ORM\Column(type="string")
	*/
    protected $address;

    /**
    * @ORM\Column(type="date")
    */
    protected $established;

    /**
    * @ORM\OneToMany(targetEntity="User", mappedBy="agency")
    */
    protected $users;

    /**
	* @ORM\Column(type="datetime")
	*/
    protected $created;

    /**
	* @ORM\Column(type="datetime")
	*/
    protected $updated;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }

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
     * Set name
     *
     * @param string $name
     * @return Agency
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Agency
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Agency
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Agency
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Agency
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Agency
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set established
     *
     * @param \DateTime $established
     * @return Agency
     */
    public function setEstablished($established)
    {
        $this->established = $established;

        return $this;
    }

    /**
     * Get established
     *
     * @return \DateTime 
     */
    public function getEstablished()
    {
        return $this->established;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Add users
     *
     * @param \BCG\ContactBundle\Entity\User $users
     * @return Agency
     */
    public function addUser(\BCG\ContactBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \BCG\ContactBundle\Entity\User $users
     */
    public function removeUser(\BCG\ContactBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
