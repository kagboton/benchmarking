<?php

namespace BenchmarkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * RetourActivation
 *
 * @ORM\Table(name="retouractivation")
 * @ORM\Entity(repositoryClass="BenchmarkingBundle\Repository\RetourActivationRepository")
 */
class RetourActivation
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
     * @ORM\ManyToOne(targetEntity="BenchmarkingBundle\Entity\TypeRetourActivation", cascade={"persist"})
     */
    private $typeRetourActivation;

    /**
     * @ORM\OneToOne(targetEntity="BenchmarkingBundle\Entity\Image", cascade={"persist"})     *
     * @Assert\File(maxSize = "4096k")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="BenchmarkingBundle\Entity\Fonction", cascade={"persist"}, mappedBy="retourActivation")
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
     * Set typeRetourActivation
     *
     * @param \BenchmarkingBundle\Entity\TypeRetourActivation $typeRetourActivation
     *
     * @return RetourActivation
     */
    public function setTypeRetourActivation(\BenchmarkingBundle\Entity\TypeRetourActivation $typeRetourActivation)
    {
        $this->typeRetourActivation = $typeRetourActivation;

        return $this;
    }

    /**
     * Get typeRetourActivation
     *
     * @return \BenchmarkingBundle\Entity\TypeRetourActivation
     */
    public function getTypeRetourActivation()
    {
        return $this->typeRetourActivation;
    }

    /**
     * Set image
     *
     * @param \BenchmarkingBundle\Entity\Image $image
     *
     * @return RetourActivation
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
     * @return RetourActivation
     */
    public function addfonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {
        $this->fonctions[] = $fonction;
        $fonction->setRetourActivation();

        return $this;
    }

    /**
     * Remove fonction
     *
     * @param \BenchmarkingBundle\Entity\Fonction $fonction
     */
    public function removefonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {
        $this->fonctions->removeElement($fonction);
    }

    /**
     * Get fonctions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getfonctions()
    {
        return $this->fonctions;
    }
}
