<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivationLogique
 *
 * @ORM\Table(name="activationlogique")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\ActivationLogiqueRepository")
 */
class ActivationLogique
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
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\Fonction", cascade={"persist"}, mappedBy="activationLogique")
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
     * Set nomAfficheur
     *
     * @param \BenchmarkingBundle\Entity\AfficheurExistant $nomAfficheur
     *
     * @return ActivationLogique
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

    /**
     * Set image
     *
     * @param \BenchmarkingBundle\Entity\Image $image
     *
     * @return ActivationLogique
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
     * Add fonction
     *
     * @param \BenchmarkingBundle\Entity\Fonction $fonction
     *
     * @return ActivationLogique
     */
    public function addFonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {
        $this->fonctions[] = $fonction;
        $fonction->setActivationLogique();

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
}
