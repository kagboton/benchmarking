<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ActivationPhysique
 *
 * @ORM\Table(name="activationphysique")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\ActivationPhysiqueRepository")
 */
class ActivationPhysique
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
     * @ORM\OneToOne(targetEntity="BenchmarkingBundle\Entity\Image", cascade={"persist"})
     * @Assert\File(maxSize = "4096k")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\Localisation", cascade={"persist"})
     */
    private $localisation;

    /**
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\CommandePhysique", cascade={"persist"})
     */
    private $commandePhysique;

    /**
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\Fonction", cascade={"persist"}, mappedBy="activationPhysique")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fonctions;


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
     * Constructor
     */
    public function __construct()
    {
        $this->fonctions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set image
     *
     * @param \BenchmarkingBundle\Entity\Image $image
     *
     * @return ActivationPhysique
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
     * Set localisation
     *
     * @param \BenchmarkingBundle\Entity\Localisation $localisation
     *
     * @return ActivationPhysique
     */
    public function setLocalisation(\BenchmarkingBundle\Entity\Localisation $localisation = null)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return \BenchmarkingBundle\Entity\Localisation
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set commandePhysique
     *
     * @param \BenchmarkingBundle\Entity\CommandePhysique $commandePhysique
     *
     * @return ActivationPhysique
     */
    public function setCommandePhysique(\BenchmarkingBundle\Entity\CommandePhysique $commandePhysique = null)
    {
        $this->commandePhysique = $commandePhysique;

        return $this;
    }

    /**
     * Get commandePhysique
     *
     * @return \BenchmarkingBundle\Entity\CommandePhysique
     */
    public function getCommandePhysique()
    {
        return $this->commandePhysique;
    }

    /**
     * Add fonction
     *
     * @param \BenchmarkingBundle\Entity\Fonction $fonction
     *
     * @return ActivationPhysique
     */
    public function addFonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {
        $this->fonctions[] = $fonction;
        $fonction->setActivationPhysique();

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
     * Get fonction
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFonctions()
    {
        return $this->fonctions;
    }
}
