<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kingdom
 *
 * @ORM\Table(name="kingdom")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KingdomRepository")
 */
class Kingdom
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sang", type="string", length=255)
     */
    private $sang;

    /**
     * @var string
     * @ORM\OneToMany(targetEntity="Personnage",mappedBy="house")
     */
    private $students;

    /**
     * @var int
     *
     * @ORM\Column(name="nbStudents", type="integer")
     */
    private $nbStudents;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Kingdom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sang
     *
     * @param string $sang
     *
     * @return Kingdom
     */
    public function setSang($sang)
    {
        $this->sang = $sang;

        return $this;
    }

    /**
     * Get sang
     *
     * @return string
     */
    public function getSang()
    {
        return $this->sang;
    }

    /**
     * Set students
     *
     * @param string $students
     *
     * @return Kingdom
     */
    public function setStudents($students)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Get students
     *
     * @return string
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set nbStudents
     *
     * @param integer $nbStudents
     *
     * @return Kingdom
     */
    public function setNbStudents($nbStudents)
    {
        $this->nbStudents = $nbStudents;

        return $this;
    }

    /**
     * Get nbStudents
     *
     * @return int
     */
    public function getNbStudents()
    {
        return $this->nbStudents;
    }
}

