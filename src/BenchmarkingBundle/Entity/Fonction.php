<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\FonctionRepository")
 */
class Fonction
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
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\FonctionExistante", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $nomFonction;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\RetourActivation", cascade={"persist"}, inversedBy="fonctions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $retourActivation;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\ActivationPhysique", cascade={"persist"}, inversedBy="fonctions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activationPhysique;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\ActivationLogique", cascade={"persist"}, inversedBy="fonctions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activationLogique;


    /**
     * @ORM\ManyToMany(targetEntity="BenchmarkingBundle\Entity\ComposantAffichage", cascade={"persist"}, mappedBy="fonctions")
     */
    private $composantsAffichage;

    /**
     * @ORM\ManyToMany(targetEntity="BenchmarkingBundle\Entity\Vehicule", mappedBy="fonctions")
     */
    private $vehicules;



    /**
     * Fonction constructor.
     */

    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
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
     * Add vehicule
     *
     * @param \BenchmarkingBundle\Entity\Vehicule $vehicule
     *
     * @return Fonction
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
     * Set nomFonction
     *
     * @param \BenchmarkingBundle\Entity\FonctionExistante $nomFonction
     *
     * @return Fonction
     */
    public function setNomFonction(\BenchmarkingBundle\Entity\FonctionExistante $nomFonction)
    {
        $this->nomFonction = $nomFonction;

        return $this;
    }

    /**
     * Get nomFonction
     *
     * @return \BenchmarkingBundle\Entity\FonctionExistante
     */
    public function getNomFonction()
    {
        return $this->nomFonction;
    }

    /**
     * Set retourActivation
     *
     * @param \BenchmarkingBundle\Entity\RetourActivation $retourActivation
     *
     * @return Fonction
     */
    public function setRetourActivation(\BenchmarkingBundle\Entity\RetourActivation $retourActivation)
    {
        $this->retourActivation = $retourActivation;

        return $this;
    }

    /**
     * Get retourActivation
     *
     * @return \BenchmarkingBundle\Entity\RetourActivation
     */
    public function getRetourActivation()
    {
        return $this->retourActivation;
    }

    /**
     * Set activationPhysique
     *
     * @param \BenchmarkingBundle\Entity\ActivationPhysique $activationPhysique
     *
     * @return Fonction
     */
    public function setActivationPhysique(\BenchmarkingBundle\Entity\ActivationPhysique $activationPhysique)
    {
        $this->activationPhysique = $activationPhysique;

        return $this;
    }

    /**
     * Get activationPhysique
     *
     * @return \BenchmarkingBundle\Entity\ActivationPhysique
     */
    public function getActivationPhysique()
    {
        return $this->activationPhysique;
    }

    /**
     * Set activationLogique
     *
     * @param \BenchmarkingBundle\Entity\ActivationLogique $activationLogique
     *
     * @return Fonction
     */
    public function setActivationLogique(\BenchmarkingBundle\Entity\ActivationLogique $activationLogique)
    {
        $this->activationLogique = $activationLogique;

        return $this;
    }

    /**
     * Get activationLogique
     *
     * @return \BenchmarkingBundle\Entity\ActivationLogique
     */
    public function getActivationLogique()
    {
        return $this->activationLogique;
    }

    /**
     * Add composantAffichage
     *
     * @param \BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage
     *
     * @return Fonction
     */
    public function addComposantAffichage(\BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage)
    {
        $this->composantsAffichage[] = $composantAffichage;

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
