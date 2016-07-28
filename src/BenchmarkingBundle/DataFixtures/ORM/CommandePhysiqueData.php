<?php
namespace BenchmarkingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BenchmarkingBundle\Entity\CommandePhysique;

class CommandePhysiqueData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // Liste des noms et|ou descritpion à ajouter
        $commandesPhysique = array(
            'Interrupeur différentiel' => 'Il sert à isoler le circuit lorsque le courant est différent entre les deux fils du circuit, cas d\'un défaut d\'isolation',
            'Levier' => 'Le levier de commande dépasse sur la face avant d\'un support qui peut être un tableau de bord, sur lequel est bien souvent fixé l\'interrupteur par un système d\'écrou.',
            'Bouton poussoir' => 'S\'actionnent par un geste très simple de pression sur le bouton. Possède deux états : ouvert et fermé',
            'Interrupteur à glissière' => 'Un interrupteur à glissière possède l\'avantage de pouvoir offrir plus de trois positions stables, avec un repère visuel de sa position',
            'Interrupteur rotatif' => 'Les interrupteurs rotatifs, bien souvent appelés commutateurs rotatifs sont commandés par un axe sur lequel est fixé un bouton qui sert en même temps d\'enjoliveur. Ce type d\'interrupteur peut comporter encore plus de positions stables qu\'un interrupteur à glissière',
            'Interrupteur de pression' =>'Un interrupteur de pression utilise un capteur de pression pour détecter la pression exercée par le doigt de l\'utilisateur.',
            'Interrupteur à bascule' => 'Ont un fonctionnement similaire au levier, le bouton basculeur n\'étant qu\'un levier à plat. Ils sont limités à trois états, très souvent seulement deux sont utilisés (marche/arrêt)',
            'Interrupteur sensitif' => 'Encore appalé interrupteur tactile, il détecte la variation de capacité provoquée par l\'approche du doigt de l\'utilisateur, comme c\'est le cas sur des écrans tactiles.',

        );
        foreach ($commandesPhysique as $nom => $description) {

            $commandePhysique = new CommandePhysique();
            $commandePhysique->setNom($nom);
            $commandePhysique->setDescription($description);

            $manager->persist($commandePhysique);
        }

        // On déclenche l'enregistrement 
        $manager->flush();

    }

}
