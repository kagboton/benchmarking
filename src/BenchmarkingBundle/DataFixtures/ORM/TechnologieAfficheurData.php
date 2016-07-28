<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\TechnologieAfficheur;

class TechnologieAfficheurData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $technologiesAfficheur = array(
            'Segments',
            'Matrice de points',
            'TFT',
            'TFT couleurs '
        );
        foreach ( $technologiesAfficheur as $nom ) {

            $technologieAfficheur = new TechnologieAfficheur();
            $technologieAfficheur->setNom($nom);

            $manager->persist($technologieAfficheur);
        }

        // On déclenche l'enregistrement 
        $manager->flush();

    }

}
