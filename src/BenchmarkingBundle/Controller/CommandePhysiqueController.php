<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\CommandePhysique;
use BenchmarkingBundle\Form\CommandePhysiqueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CommandePhysiqueController extends Controller
{

    public function indexAction()
    {

        $listCommandesPhysiques = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:CommandePhysique')->findAll();


        return $this->render('BenchmarkingBundle:Default:CommandePhysique/index.html.twig', array(
            'listCommandesPhysiques' => $listCommandesPhysiques,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $commandePhysique = $em->getRepository('BenchmarkingBundle:CommandePhysique')->find($id);

        
        if (null === $commandePhysique) {
            throw new NotFoundHttpException("La commande physique d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:CommandePhysique/view.html.twig', array(
            'commandePhysique' => $commandePhysique,
        ));
    }

    public function addAction(Request $request){

        $commandePhysique = new CommandePhysique();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(CommandePhysiqueType::class, $commandePhysique);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($commandePhysique);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'La commande physique a été bien enregistrée.');

                // On redirige vers la page de visualisation de cette commande physique
                return $this->redirectToRoute('commandePhysique_view', array('id' => $commandePhysique->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:CommandePhysique/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $commandePhysique = $em->getRepository('BenchmarkingBundle:CommandePhysique')->find($id);

        if (null === $commandePhysique) {
            throw new NotFoundHttpException("La commande physique d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(CommandePhysiqueType::class, $commandePhysique);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($commandePhysique);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Commande physique bien modifié.');

                return $this->redirectToRoute('commandePhysique_view', array('id' => $commandePhysique->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:CommandePhysique/edit.html.twig', array(
            'form' => $form->createView(),
            'commandePhysique' => $commandePhysique,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $commandePhysique = $em->getRepository('BenchmarkingBundle:CommandePhysique')->find($id);

        if (null === $commandePhysique) {
            throw new NotFoundHttpException("La commande physique d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de commande physique contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($commandePhysique);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La commande physique a bien été supprimée.");

            return $this->redirectToRoute('commandesPhysiques');
        }

        return $this->render('BenchmarkingBundle:Default:CommandePhysique/delete.html.twig', array(
            'commandePhysique' => $commandePhysique,
            'form'   => $form->createView(),
        ));
    }
}
