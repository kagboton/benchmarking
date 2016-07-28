<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee", type="date")
     */
    private $annee;


    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\Motorisation", cascade={"persist"}, inversedBy="vehicules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $motorisation;


    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\Marque", cascade={"persist"}, inversedBy="vehicules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\BoiteVitesse", cascade={"persist"}, inversedBy="vehicules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $boiteVitesse;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\Segment", cascade={"persist"}, inversedBy="vehicules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $segment;

    /**
     * @ORM\OneToOne(targetEntity="BenchmarkingBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity="BenchmarkingBundle\Entity\Fonction", cascade={"persist"}, inversedBy="vehicules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fonctions;

    /**
     * @ORM\ManyToMany(targetEntity="BenchmarkingBundle\Entity\ComposantAffichage", cascade={"persist"}, inversedBy="vehicules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $composantsAffichage;


    /**
     * Vehicule constructor.
     */
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->fonctions = new ArrayCollection();
        $this->composantsAffichage = new ArrayCollection();
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
    * @param \DateTime $date
    */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Vehicule
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
     * Set annee
     *
     * @param \DateTime $annee
     *
     * @return Vehicule
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set motorisation
     *
     * @param \BenchmarkingBundle\Entity\Motorisation $motorisation
     *
     * @return Vehicule
     */
    public function setMotorisation(\BenchmarkingBundle\Entity\Motorisation $motorisation)
    {
        $this->motorisation = $motorisation;

        return $this;
    }

    /**
     * Get motorisation
     *
     * @return \BenchmarkingBundle\Entity\Motorisation
     */
    public function getMotorisation()
    {
        return $this->motorisation;
    }

    /**
     * Set marque
     *
     * @param \BenchmarkingBundle\Entity\Marque $marque
     *
     * @return Vehicule
     */
    public function setMarque(\BenchmarkingBundle\Entity\Marque $marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \BenchmarkingBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }


    /**
     * Set segment
     *
     * @param \BenchmarkingBundle\Entity\Segment $segment
     *
     * @return Vehicule
     */
    public function setSegment(\BenchmarkingBundle\Entity\Segment $segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return \BenchmarkingBundle\Entity\Segment
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set image
     *
     * @param \BenchmarkingBundle\Entity\Image $image
     *
     * @return Vehicule
     */
    public function setImage(\BenchmarkingBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \BenchmarkingBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add fonction
     *
     * @param \BenchmarkingBundle\Entity\Fonction $fonction
     *
     * @return Vehicule
     */
    public function addFonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {
        $this->fonctions[] = $fonction;
        $fonction->addVehicule($this);

        return $this;
    }

    /**
     * Remove fonction
     *
     * @param \BenchmarkingBundle\Entity\Fonction $fonction
     */
    public function removeFonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {
        $this->fonctions->removeElement($fonction);
    }

    /**
     * Get fonctions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFonctions()
    {
        return $this->fonctions;
    }

    /**
     * Set boiteVitesse
     *
     * @param \BenchmarkingBundle\Entity\BoiteVitesse $boiteVitesse
     *
     * @return Vehicule
     */
    public function setBoiteVitesse(\BenchmarkingBundle\Entity\BoiteVitesse $boiteVitesse)
    {
        $this->boiteVitesse = $boiteVitesse;

        return $this;
    }

    /**
     * Get boiteVitesse
     *
     * @return \BenchmarkingBundle\Entity\BoiteVitesse
     */
    public function getBoiteVitesse()
    {
        return $this->boiteVitesse;
    }


    /**
     * Add composantAffichage
     *
     * @param \BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage
     *
     * @return Vehicule
     */
    public function addComposantAffichage(\BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage)
    {
        $this->composantsAffichage[] = $composantAffichage;
        $composantAffichage->addVehicule($this);

        return $this;
    }

    /**
     * Remove composantAffichage
     *
     * @param \BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage
     */
    public function removeComposantAffichage(\BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage)
    {
        $this->composantsAffichage->removeElement($composantAffichage);
    }

    /**
     * Get composantsAffichage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComposantsAffichage()
    {
        return $this->composantsAffichage;
    }
}
