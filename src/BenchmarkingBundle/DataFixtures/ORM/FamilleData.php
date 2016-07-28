<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\Famille;

class FamilleData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $familles = array(
            'ADAS' => 'Advanced Driving Assistance Systems : Systèmes avancés d’assistance à la conduite',
            'AAP' => 'Ensemble des fonctions d\'Aides Au Parking ',
            'Châssis - Transmission' => 'Ensemble des options d\'aide au démarrage et de conduite',
            'Chauffagge - Climatisation' => 'Les options  de climatisation et de chauffage du véhicule',
            'Confort' => 'Confort au sein du cockpit',
            'Divers' => 'Divers indicateurs au sein du véhicule',
            'Autres systèmes' => 'Autres systèmes d\'assistance lors de la conduite',
            'EV-HEV' =>  'Electric Vehicule & Hybrid Electric Vehicule',
            'ECO' => 'Les modes economie',
            'Personnalisation' => 'Personnalisation de l\'environnement IHM',
            'Eclairage poste de conduite' => 'Eclairage poste de conduite',
            'Modes de conduites'=> 'Les modes de conduites',
            'Driving monitoring' => 'Ensemble de fonctions permettant de suivre sa conduite',
            '4x4 Navigation module' => 'Navigation en mode 4x4',
            'Démarrage Arrêt de IHM' => 'Ensemble des séquences de démarrage et d\'arrêt IHM'
        );

        foreach ($familles as $nom => $description) {

            $famille = new Famille();
            $famille->setNom($nom);
            $famille->setDescription($description);

            $manager->persist($famille);
        }

        // On déclenche l'enregistrement 
        $manager->flush();

    }

}
