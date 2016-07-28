<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Segment
 *
 * @ORM\Table(name="segment")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\SegmentRepository")
 */
class Segment
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\Vehicule", mappedBy="segment")
     */
    private $vehicules;


    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }



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
     * @return Segment
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
     * @return Segment
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
     * @return Segment
     */
    public function addVehicule(\BenchmarkingBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicules[] = $vehicule;
        $vehicule->setSegment($this);

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
