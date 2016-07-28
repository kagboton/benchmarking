<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TailleEcran
 *
 * @ORM\Table(name="tailleecran")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\TailleEcranRepository")
 */
class TailleEcran
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
     * @ORM\Column(name="taille", type="string", length=255)
     */
    private $taille;

    /**
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\ComposantAffichage", cascade={"persist"}, mappedBy="tailleEcran")
     * @ORM\JoinColumn(nullable=false)
     */
    private $composantsAffichage;


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
     * Set taille
     *
     * @param string $taille
     *
     * @return TailleEcran
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->composantsAffichage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add composantAffichage
     *
     * @param \BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage
     *
     * @return TailleEcran
     */
    public function addComposantAffichage(\BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage)
    {
        $this->composantsAffichage[] = $composantAffichage;
        $composantAffichage->setTailleEcran();

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
