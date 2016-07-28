<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="famille")
 * @ORM\Entity
 */
class Famille
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
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\FonctionExistante", cascade={"persist"}, mappedBy="famille")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fonctionsExistantes;
    
        
    public function __construct()
    {
        $this->fonctionsExistantes = new ArrayCollection();
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
     * @return Famille
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
     * @return Famille
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
     * Add fonctionExistante
     *
     * @param \BenchmarkingBundle\Entity\FonctionExistante $fonctionExistante
     *
     * @return Famille
     */
    public function addFonctionExistante(\BenchmarkingBundle\Entity\FonctionExistante $fonctionExistante)
    {
        $this->fonctionsExistantes[] = $fonctionExistante;
        $fonctionExistante->setFamille();

        return $this;
    }

    /**
     * Remove fonctionExistante
     *
     * @param \BenchmarkingBundle\Entity\FonctionExistante $fonctionExistante
     */
    public function removeFonctionExistante(\BenchmarkingBundle\Entity\FonctionExistante $fonctionExistante)
    {
        $this->fonctionsExistantes->removeElement($fonctionExistante);
    }

    /**
     * Get fonctionsExistantes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFonctionsExistantes()
    {
        return $this->fonctionsExistantes;
    }
}
