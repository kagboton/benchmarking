<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FonctionExistante
 *
 * @ORM\Table(name="fonctionexistante")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\FonctionExistanteRepository")
 */
class FonctionExistante
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
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\Famille", cascade={"persist"}, inversedBy="fonctionsExistantes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $famille;


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
     * @return FonctionExistante
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
     * @return FonctionExistante
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
     * Set famille
     *
     * @param \BenchmarkingBundle\Entity\Famille $famille
     *
     * @return FonctionExistante
     */
    public function setFamille(\BenchmarkingBundle\Entity\Famille $famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return \BenchmarkingBundle\Entity\Famille
     */
    public function getFamille()
    {
        return $this->famille;
    }
}
