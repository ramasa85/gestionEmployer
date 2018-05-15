<?php

namespace EmployerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="EmployerBundle\Repository\UserRepository")
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

    public function __construct()
    {

        parent::__construct();

    }

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     *  protected $username;
     */

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255)
     *  protected $usernameCanonical;
     */

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * protected $email;
     */

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255)
     * protected $emailCanonical;
     */

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="integer")
     *  protected $enabled;
     */

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     *  protected $salt;
     */

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * protected $password;
     */

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime")
     *  protected $lastLogin;
     */

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255)
     * protected $confirmationToken;
     */

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_request_at", type="datetime")
     * protected $passwordRequestAt;
     */

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     *  protected $role;
     */


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set usernameCanonical
     *
     * @param string $usernameCanonical
     *
     * @return User
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;

        return $this;
    }

    /**
     * Get usernameCanonical
     *
     * @return string
     */
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set emailCanonical
     *
     * @param string $emailCanonical
     *
     * @return User
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;

        return $this;
    }

    /**
     * Get emailCanonical
     *
     * @return string
     */
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     *
     * @return User

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }*/


    public function isEnabled()
    {
        return $this->enabled;
    }


    /**
     * Get enabled
     *
     * @return int
    public function getEnabled()
    {
        return $this->enabled;
    }
     * */

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return User
     */
    public function setLastLogin(\DateTime $time = null)
    {
        $this->lastLogin = $time;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     *
     * @return User
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * Get confirmationToken
     *
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set passwordRequestAt
     *
     * @param \DateTime $passwordRequestAt
     *
     * @return User
     */
    public function setPasswordRequestAt($passwordRequestAt)
    {
        $this->passwordRequestAt = $passwordRequestAt;

        return $this;
    }

    /**
     * Get passwordRequestAt
     *
     * @return \DateTime
     */
    public function getPasswordRequestAt()
    {
        return $this->passwordRequestAt;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}

