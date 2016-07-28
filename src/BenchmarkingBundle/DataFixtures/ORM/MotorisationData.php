<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\Motorisation;

class MotorisationData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $motorisations = array(
            'Essence' => 'Moteurs thermiques fonctionnant à l\'essence',
            'Diesel' => 'Moteurs thermiques fonctionnant au gasoil',
            'GPL' => 'Gaz de Pétrole Liquéfié. Utilisé sur des moteurs à carburant essence muni d\'un dispositif spécifique',
            'Hybride' => 'Une hybridation entre un moteur thermique et un moteur électrique',
            'Gaz' => 'Moteur fonctionnant au gaz naturel',
            'Électrique‎ ' => 'Moteur fonctionnant à l\' éléctricité',

        );

        foreach ($motorisations as $nom => $description) {

            $motorisation = new Motorisation();
            $motorisation->setNom($nom);
            $motorisation->setDescription($description);

            $manager->persist($motorisation);
        }

        // On déclenche l'enregistrement
        $manager->flush();

    }

}
