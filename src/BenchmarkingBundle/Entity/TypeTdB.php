<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeTdB
 *
 * @ORM\Table(name="typetdb")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\TypeTdBRepository")
 */
class TypeTdB
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
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\ComposantAffichage", cascade={"persist"}, mappedBy="typeTdB")
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
     * Set nom
     *
     * @param string $nom
     *
     * @return TypeTdB
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
     * @return TypeTdB
     */
    public function addComposantAffichage(\BenchmarkingBundle\Entity\ComposantAffichage $composantAffichage)
    {
        $this->composantsAffichage[] = $composantAffichage;
        $composantAffichage->setTypeTdB();

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
