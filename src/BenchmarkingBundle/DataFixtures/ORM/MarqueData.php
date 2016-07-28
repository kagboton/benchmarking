<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\Marque;

class MarqueData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $noms = array(
            'ALFA ROMEO',
            'ASTON MARTIN',
            'AUDI',
            'BENTLEY',
            'BMW',
            'CADILLAC',
            'CHEVROLET',
            'CITROEN',
            'FIAT',
            'FORD',
            'HONDA',
            'LAMBORGHINI',
            'MAZDA',
            'MERCEDES',
            'MITSUBISHI',
            'NISSAN',
            'OPEL',
            'PEUGEOT',
            'RENAULT',
            'SEAT',
            'SUZUKI' ,
            'TOYOTA',
            'VOLKSWAGEN',
            'VOLVO'

        );

        foreach ($noms as $nom) {

            $marque = new Marque();
            $marque->setNom($nom);

            $manager->persist($marque);
        }

        // On déclenche l'enregistrement
        $manager->flush();

    }

}
