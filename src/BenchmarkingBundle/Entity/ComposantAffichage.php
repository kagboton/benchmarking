<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ComposantAffichage
 *
 * @ORM\Table(name="composantaffichage")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\ComposantAffichageRepository")
 */
class ComposantAffichage
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
    * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\AfficheurExistant", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $nomAfficheur;


    /**
     * @ORM\OneToOne(targetEntity="BenchmarkingBundle\Entity\Image", cascade={"persist"})
     * @Assert\File(maxSize = "4096k")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\TechnologieAfficheur", cascade={"persist"}, inversedBy="composantsAffichage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $technologieAfficheur;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\SousTechnologieAfficheur", cascade={"persist"}, inversedBy="composantsAffichage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sousTechnologieAfficheur;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\TailleEcran", cascade={"persist"}, inversedBy="composantsAffichage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tailleEcran;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\FormatEcran", cascade={"persist"}, inversedBy="composantsAffichage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formatEcran;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\TypeTdB", cascade={"persist"}, inversedBy="composantsAffichage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeTdB;


    /**
     * @ORM\ManyToMany(targetEntity="BenchmarkingBundle\Entity\Vehicule", mappedBy="composantsAffichage")
     */
    private $vehicules;

    /**
     * @ORM\ManyToMany(targetEntity="BenchmarkingBundle\Entity\Fonction", cascade={"persist"}, inversedBy="composantsAffichage")
     */
    private $fonctions;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
        $this->fonctions = new ArrayCollection();
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
     * Add vehicule
     *
     * @param \BenchmarkingBundle\Entity\Vehicule $vehicule
     *
     * @return ComposantAffichage
     */
    public function addVehicule(\BenchmarkingBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicules[] = $vehicule;

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

    /**
     * Set image
     *
     * @param \BenchmarkingBundle\Entity\Image $image
     *
     * @return ComposantAffichage
     */
    public function setImage(\BenchmarkingBundle\Entity\Image $image = null)
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
     * Set technologieAfficheur
     *
     * @param \BenchmarkingBundle\Entity\TechnologieAfficheur $technologieAfficheur
     *
     * @return ComposantAffichage
     */
    public function setTechnologieAfficheur(\BenchmarkingBundle\Entity\TechnologieAfficheur $technologieAfficheur)
    {
        $this->technologieAfficheur = $technologieAfficheur;

        return $this;
    }

    /**
     * Get technologieAfficheur
     *
     * @return \BenchmarkingBundle\Entity\TechnologieAfficheur
     */
    public function getTechnologieAfficheur()
    {
        return $this->technologieAfficheur;
    }

    /**
     * Set typeTdB
     *
     * @param \BenchmarkingBundle\Entity\TypeTdB $typeTdB
     *
     * @return ComposantAffichage
     */
    public function setTypeTdB(\BenchmarkingBundle\Entity\TypeTdB $typeTdB)
    {
        $this->typeTdB = $typeTdB;

        return $this;
    }

    /**
     * Get typeTdB
     *
     * @return \BenchmarkingBundle\Entity\TypeTdB
     */
    public function getTypeTdB()
    {
        return $this->typeTdB;
    }

    /**
     * Add fonction
     *
     * @param \BenchmarkingBundle\Entity\Fonction $fonction
     *
     * @return ComposantAffichage
     */
    public function addFonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {
        $this->fonctions[] = $fonction;
        $fonction->addComposantAffichage();

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
     * Set sousTechnologieAfficheur
     *
     * @param \BenchmarkingBundle\Entity\SousTechnologieAfficheur $sousTechnologieAfficheur
     *
     * @return ComposantAffichage
     */
    public function setSousTechnologieAfficheur(\BenchmarkingBundle\Entity\SousTechnologieAfficheur $sousTechnologieAfficheur)
    {
        $this->sousTechnologieAfficheur = $sousTechnologieAfficheur;

        return $this;
    }

    /**
     * Get sousTechnologieAfficheur
     *
     * @return \BenchmarkingBundle\Entity\SousTechnologieAfficheur
     */
    public function getSousTechnologieAfficheur()
    {
        return $this->sousTechnologieAfficheur;
    }

    /**
     * Set formatEcran
     *
     * @param \BenchmarkingBundle\Entity\FormatEcran $formatEcran
     *
     * @return ComposantAffichage
     */
    public function setFormatEcran(\BenchmarkingBundle\Entity\FormatEcran $formatEcran)
    {
        $this->formatEcran = $formatEcran;

        return $this;
    }

    /**
     * Get formatEcran
     *
     * @return \BenchmarkingBundle\Entity\FormatEcran
     */
    public function getFormatEcran()
    {
        return $this->formatEcran;
    }

    /**
     * Set tailleEcran
     *
     * @param \BenchmarkingBundle\Entity\TailleEcran $tailleEcran
     *
     * @return ComposantAffichage
     */
    public function setTailleEcran(\BenchmarkingBundle\Entity\TailleEcran $tailleEcran)
    {
        $this->tailleEcran = $tailleEcran;

        return $this;
    }

    /**
     * Get tailleEcran
     *
     * @return \BenchmarkingBundle\Entity\TailleEcran
     */
    public function getTailleEcran()
    {
        return $this->tailleEcran;
    }

    /**
     * Set nomAfficheur
     *
     * @param \BenchmarkingBundle\Entity\AfficheurExistant $nomAfficheur
     *
     * @return ComposantAffichage
     */
    public function setNomAfficheur(\BenchmarkingBundle\Entity\AfficheurExistant $nomAfficheur)
    {
        $this->nomAfficheur = $nomAfficheur;

        return $this;
    }

    /**
     * Get nomAfficheur
     *
     * @return \BenchmarkingBundle\Entity\AfficheurExistant
     */
    public function getNomAfficheur()
    {
        return $this->nomAfficheur;
    }
}
