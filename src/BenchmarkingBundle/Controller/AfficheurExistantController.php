<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\AfficheurExistant;
use BenchmarkingBundle\Form\AfficheurExistantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AfficheurExistantController extends Controller
{

    public function indexAction()
    {

        $listAfficheurs = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:AfficheurExistant')->findAll();


        return $this->render('BenchmarkingBundle:Default:AfficheurExistant/index.html.twig', array(
            'listAfficheurs' => $listAfficheurs,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $afficheur = $em->getRepository('BenchmarkingBundle:AfficheurExistant')->find($id);

        
        if (null === $afficheur) {
            throw new NotFoundHttpException("L'afficheur d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:AfficheurExistant/view.html.twig', array(
            'afficheur' => $afficheur,
        ));
    }

    public function addAction(Request $request){

        $afficheur = new AfficheurExistant();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(AfficheurExistantType::class, $afficheur);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($afficheur);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'L\'afficheur a été bien enregistré.');

                // On redirige vers la page de visualisation de l'afficheur
                return $this->redirectToRoute('afficheur_view', array('id' => $afficheur->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:AfficheurExistant/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $afficheur = $em->getRepository('BenchmarkingBundle:AfficheurExistant')->find($id);

        if (null === $afficheur) {
            throw new NotFoundHttpException("L'afficheur d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(AfficheurExistantType::class, $afficheur);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($afficheur);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Afficheur bien modifié.');

                return $this->redirectToRoute('afficheur_view', array('id' => $afficheur->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:AfficheurExistant/edit.html.twig', array(
            'form' => $form->createView(),
            'afficheur' => $afficheur,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $afficheur = $em->getRepository('BenchmarkingBundle:AfficheurExistant')->find($id);

        if (null === $afficheur) {
            throw new NotFoundHttpException("L'afficheur d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de l'afficheur contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($afficheur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'afficheur a bien été supprimé.");

            return $this->redirectToRoute('afficheurs');
        }

        return $this->render('BenchmarkingBundle:Default:AfficheurExistant/delete.html.twig', array(
            'afficheur' => $afficheur,
            'form'   => $form->createView(),
        ));
    }
}
