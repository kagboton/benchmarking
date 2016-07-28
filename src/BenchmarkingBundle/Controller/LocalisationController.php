<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\Localisation;
use BenchmarkingBundle\Form\LocalisationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class LocalisationController extends Controller
{

    public function indexAction()
    {

        $listLocalisations = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:Localisation')->findAll();


        return $this->render('BenchmarkingBundle:Default:Localisation/index.html.twig', array(
            'listLocalisations' => $listLocalisations,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $localisation = $em->getRepository('BenchmarkingBundle:Localisation')->find($id);

        
        if (null === $localisation) {
            throw new NotFoundHttpException("La localisation d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:Localisation/view.html.twig', array(
            'localisation' => $localisation,
        ));
    }

    public function addAction(Request $request){

        $localisation = new Localisation();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(LocalisationType::class, $localisation);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($localisation);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Localisation bien enregistrée.');

                // On redirige vers la page de visualisation de cette localisation
                return $this->redirectToRoute('localisation_view', array('id' => $localisation->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:Localisation/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $localisation = $em->getRepository('BenchmarkingBundle:Localisation')->find($id);

        if (null === $localisation) {
            throw new NotFoundHttpException("La localisation d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(LocalisationType::class, $localisation);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($localisation);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Localisation bien modifiée.');

                return $this->redirectToRoute('localisation_view', array('id' => $localisation->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:Localisation/edit.html.twig', array(
            'form' => $form->createView(),
            'localisation' => $localisation,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $localisation = $em->getRepository('BenchmarkingBundle:Localisation')->find($id);

        if (null === $localisation) {
            throw new NotFoundHttpException("La localisation d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de localisation contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($localisation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La localisation a bien été supprimée.");

            return $this->redirectToRoute('localisations');
        }

        return $this->render('BenchmarkingBundle:Default:Localisation/delete.html.twig', array(
            'localisation' => $localisation,
            'form'   => $form->createView(),
        ));
    }
}
