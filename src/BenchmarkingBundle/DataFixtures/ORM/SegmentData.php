<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\Segment;

class SegmentData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $segments = array(
            'Global Access' => 'Global Access',
            'Segment A (I1)' => 'Mini-citadines jusqu\'à 3,75 m',
            'Segment B (I2)' => 'Citadines polyvalentes de 3,75 à 4,20 m',
            'Segment C (M1)' => 'Compactes de 4,20 à 4,65 m, SUV',
            'Segment D (M2S)' => 'Berlines familiales de 4,65 à 4,85 m',
            'Segment E (M2S ou H1)' => 'Grandes berlines de 4,85 à 5 m, Routières)',
            'Segment F (H2)' => 'Berlines de luxe, Limousines',
            'VU1' => 'Véhicules Utilitaires Type1: Fourgonnettes(Car-Derived Van)',
            'VU2' =>  'Véhicules Utilitaires Type2: Fourgons compacts',
            'VU3' => 'Véhicules Utilitaires Type3: Gros fourgons',
            'VE' =>  'Vehicules Electriques',

        );

        foreach ($segments as $nom => $description) {

            $segment = new Segment();
            $segment->setNom($nom);
            $segment->setDescription($description);

            $manager->persist($segment);
        }

        // On déclenche l'enregistrement 
        $manager->flush();

    }

}
