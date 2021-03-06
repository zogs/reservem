<?php

namespace Zogs\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Zogs\UserBundle\Entity\Avatar;
use Zogs\UserBundle\Entity\Settings;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Zogs\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $facebookId = null;

     /**
     * @ORM\Column(type="string", length=10)
     */
    private $type = 'person';

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $firstname = '';

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $lastname = '';

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday = null;

    /**
     * @ORM\OneToOne(targetEntity="Zogs\UserBundle\Entity\Avatar", fetch="EAGER", cascade={"all"})
     * @ORM\JoinColumn(nullable=true, name="avatar_id", referencedColumnName="id")
     */
    private $avatar = null;

    /**
     * @ORM\OneToOne(targetEntity="Zogs\UserBundle\Entity\Settings", cascade={"persist","remove"})
     */
    private $settings = null;


    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $gender = '';

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description = '';

    /**
     * @ORM\ManyToOne(targetEntity="Zogs\WorldBundle\Entity\Location", fetch="EAGER", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, name="location_id")
     */
    private $location = null;

    /**
     * @ORM\Column(type="date")
     */
    private $register_since = '';

    /**
    * @ORM\Column(type="integer", nullable=true)
    */
    private $updatedCount = '';

    /**
     * @ORM\Column(type="text", length=6, nullable=true, name="lang")
     */
    private $lang = '';

    /**
     * @ORM\OneToMany(targetEntity="Crc\ReservBundle\Entity\Reservation", mappedBy="user", cascade={"remove"})
     */
    private $reservations;

    /**
     * @ORM\ManyToMany(targetEntity="Crc\ReservBundle\Entity\Department", mappedBy="members",  fetch="EAGER", cascade={"remove"})
     */
    private $departments;



    public function __construct()
    {
        parent::__construct();

        $this->settings = new Settings();    
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(empty($this->register_since)) $this->register_since = new \DateTime();
    }


    /**
     * @ORM\PreUpdate
     */
    public function countProfileUpdated()
    {
        $this->updatedCount++;
    }

    
    /**
     * @ORM\PrePersist
     */
    public function setDefaultAvatar()
    {        
        if(!isset($this->avatar)) $this->avatar = new Avatar();
    }

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Has birthday
     *
     * @return Boolean
     */
    public function hasBirthday()
    {
        return (isset($this->birthday))? true : false;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set register_since
     *
     * @param \DateTime $registerSince
     * @return User
     */
    public function setRegisterSince($registerSince)
    {
        $this->register_since = $registerSince;

        return $this;
    }

    /**
     * Get register_since
     *
     * @return \DateTime 
     */
    public function getRegisterSince()
    {
        return $this->register_since;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return User
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    

    /**
     * Set updatedCount
     *
     * @param integer $updatedCount
     * @return User
     */
    public function setUpdatedCount($updatedCount)
    {
        $this->updatedCount = $updatedCount;

        return $this;
    }

    /**
     * Get updatedCount
     *
     * @return integer 
     */
    public function getUpdatedCount()
    {
        return $this->updatedCount;
    }

    /**
     * Set location
     *
     * @param \Zogs\WorldBundle\Entity\Location $location
     * @return User
     */
    public function setLocation(\Zogs\WorldBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Zogs\WorldBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set avatar
     *
     * @param object $avatar
     * @return User
     */
    public function setAvatar(Avatar $avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return object avatar 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }


    /**
     * Get settings
     *
     * @return object settings 
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set Settings
     */
    public function setSettings(Settings $settings)
    {        
        $this->settings = $settings;
    }

    /**
     * Set Salt
     */
    public function setSalt($salt)
    {        
        $this->salt = $salt;
    }



    /**
     * Set facebookId
     *
     * @param integer $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return integer 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    

    /**
     * Add reservations
     *
     * @param \Crc\ReservBundle\Entity\Reservation $reservations
     * @return User
     */
    public function addReservation(\Crc\ReservBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \Crc\ReservBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\Crc\ReservBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add departments
     *
     * @param \Crc\ReservBundle\Entity\Department $departments
     * @return User
     */
    public function addDepartment(\Crc\ReservBundle\Entity\Department $departments)
    {
        $this->departments[] = $departments;

        return $this;
    }

    /**
     * Remove departments
     *
     * @param \Crc\ReservBundle\Entity\Department $departments
     */
    public function removeDepartment(\Crc\ReservBundle\Entity\Department $departments)
    {
        $this->departments->removeElement($departments);
    }

    /**
     * Get departments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartments()
    {
        return $this->departments;
    }
}
