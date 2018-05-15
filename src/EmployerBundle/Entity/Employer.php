<?php

namespace EmployerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employer
 *
 * @ORM\Table(name="employer")
 * @ORM\Entity(repositoryClass="EmployerBundle\Repository\EmployerRepository")
 */
class Employer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEmp", type="string", length=100)
     */
    private $nomEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomEmp", type="string", length=100)
     */
    private $prenomEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=100)
     */
    private $telephone;

    /**
     * @ORM\ManyToOne(targetEntity="EmployerBundle\Entity\Departement")
     * @ORM\JoinColumn(name="departement_id", referencedColumnName="id", nullable=false)
     */
    private $departement;

    /**
     * @ORM\ManyToOne(targetEntity="EmployerBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id",nullable=false)
     */
    private $utilisateur;


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
     * Set nomEmp
     *
     * @param string $nomEmp
     *
     * @return Employer
     */
    public function setNomEmp($nomEmp)
    {
        $this->nomEmp = $nomEmp;

        return $this;
    }

    /**
     * Get nomEmp
     *
     * @return string
     */
    public function getNomEmp()
    {
        return $this->nomEmp;
    }

    /**
     * Set prenomEmp
     *
     * @param string $prenomEmp
     *
     * @return Employer
     */
    public function setPrenomEmp($prenomEmp)
    {
        $this->prenomEmp = $prenomEmp;

        return $this;
    }

    /**
     * Get prenomEmp
     *
     * @return string
     */
    public function getPrenomEmp()
    {
        return $this->prenomEmp;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Employer
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param mixed $utilisateur
     */
    public function setUserId($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * Set utilisateur
     *
     * @param \EmployerBundle\Entity\Utilisateur $utilisateur
     *
     * @return Employer
     */
    public function setUtilisateur(\EmployerBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->getNomEmp();

    }
}
