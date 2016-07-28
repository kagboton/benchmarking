<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\SousTechnologieAfficheur;

class SousTechnologieAfficheurData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms et|ou descritpion à ajouter
        $soustechnologiesAfficheur = array(
            'Normally White',
            'Normally Black'
        );
        foreach ($soustechnologiesAfficheur as $nom ) {

            $soustechnologieAfficheur = new SousTechnologieAfficheur();
            $soustechnologieAfficheur->setNom($nom);

            $manager->persist($soustechnologieAfficheur);
        }

        // On déclenche l'enregistrement 
        $manager->flush();

    }

}
