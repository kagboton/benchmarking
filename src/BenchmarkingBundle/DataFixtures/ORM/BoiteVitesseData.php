<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\BoiteVitesse;

class BoiteVitesseData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $boitesVitesse = array(
            'Automatique' => 'Boîte à vitesses automatique',
            'Manuelle' => 'Boîte à vitesses manuelle',
            'CVT & IVT' => 'Fonctionne sur le principe d’une transmission à variation continue',
            'Hybride' => 'Boîte à vitesse robotisée avec le même principe que la boîte à vitesse manuelle'
        );

        foreach ($boitesVitesse as $nom => $description) {

            $boiteVitesse = new BoiteVitesse();
            $boiteVitesse->setNom($nom);
            $boiteVitesse->setDescription($description);

            $manager->persist($boiteVitesse);
        }

        // On déclenche l'enregistrement
        $manager->flush();

    }

}
