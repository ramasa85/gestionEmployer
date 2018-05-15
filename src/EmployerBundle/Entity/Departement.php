<?php

namespace EmployerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="EmployerBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="nomDep", type="string", length=100)
     */
    private $nomDep;


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
     * Set nomDep
     *
     * @param string $nomDep
     *
     * @return Departement
     */
    public function setNomDep($nomDep)
    {
        $this->nomDep = $nomDep;

        return $this;
    }

    /**
     * Get nomDep
     *
     * @return string
     */
    public function getNomDep()
    {
        return $this->nomDep;
    }
    public function __toString()
    {
        return (string) $this->getNomDep();
    }
}
