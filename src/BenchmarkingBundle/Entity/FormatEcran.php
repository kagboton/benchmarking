<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatEcran
 *
 * @ORM\Table(name="formatecran")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\FormatEcranRepository")
 */
class FormatEcran
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
     * @ORM\Column(name="format", type="string", length=255)
     */
    private $format;

    /**
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\ComposantAffichage", cascade={"persist"}, mappedBy="formatEcran")
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
     * Set format
     *
     * @param string $format
     *
     * @return FormatEcran
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
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
     * @return FormatEcran
     */
    public function addComposantAffichage(\BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage)
    {
        $this->composantsAffichage[] = $composantAffichage;
        $composantAffichage->setFormatEcran();

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
