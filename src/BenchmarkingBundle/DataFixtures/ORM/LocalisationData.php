<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\Localisation;

class LocalisationData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $localisations = array(
            'C1',
            'C2',
            'C3',
            'C4',
            'C5',
            'C6',
            'C7',
            'C8',
            'C9',
            'C10',
            'Y0',
        );

        foreach ($localisations as $nom) {

            $localisation = new Localisation();
            $localisation->setNom($nom);

            $manager->persist($localisation);
        }

        // On déclenche l'enregistrement 
        $manager->flush();

    }

}
