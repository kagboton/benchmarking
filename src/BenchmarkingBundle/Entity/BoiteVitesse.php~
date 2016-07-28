<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * BoiteVitesse
 *
 * @ORM\Table(name="boitevitesse")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\BoiteVitesseRepository")
 */
class BoiteVitesse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\Vehicule", mappedBy="boiteVitesse")
     */
    private $vehicules;


    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return BoiteVitesse
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
     * Set description
     *
     * @param string $description
     *
     * @return BoiteVitesse
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
     * Add vehicule
     *
     * @param \BenchmarkingBundle\Entity\Vehicule $vehicule
     *
     * @return BoiteVitesse
     */
    public function addVehicule(\BenchmarkingBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicules[] = $vehicule;
        $vehicule->setMarque($this);

        return $this;
    }

    /**
     * Remove vehicule
     *
     * @param \BenchmarkingBundle\Entity\Vehicule $vehicule
     */
    public function removeVehicule(\BenchmarkingBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicules->removeElement($vehicule);
    }

    /**
     * Get vehicules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVehicules()
    {
        return $this->vehicules;
    }
}
