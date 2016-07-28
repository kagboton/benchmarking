<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\TypeTdB;

class TypeTdBData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $typesTdB = array(
            'Mécanique',
            'Hybride mécanique TFT',
            'Full TFT'
        );
        foreach ($typesTdB as $nom ) {

            $typeTdB = new TypeTdB();
            $typeTdB->setNom($nom);

            $manager->persist($typeTdB);
        }

        // On déclenche l'enregistrement 
        $manager->flush();

    }

}
