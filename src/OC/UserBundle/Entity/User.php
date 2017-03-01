<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Form\Type\RegistrationFormType;
use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\Model\UserManager;
use FOS\UserBundle\Model\UserManagerInterface;

/**
 * @ORM\Table(name="oc_user")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;


    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    protected $age;


    /**
     * @var string
     *
     * @ORM\Column(name="race", type="text")
     */
    protected $race;



    /**
     * @var string
     *
     * @ORM\Column(name="nourriture", type="text")
     */
    protected $nourriture;


    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }



    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }



    /**
     * Set age
     *
     * @param string $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }


    /**
     * Set race
     *
     * @param string $race
     * @return User
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * @return string
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }

    /**
     * @param string $nourriture
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;
    }



}
