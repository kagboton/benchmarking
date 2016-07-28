<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\Motorisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BenchmarkingBundle\Form\MotorisationType;
use Symfony\Component\HttpFoundation\Request;


class MotorisationController extends Controller
{

    public function indexAction()
    {

        $listMotorisations = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:Motorisation')->findAll();


        return $this->render('BenchmarkingBundle:Default:Motorisation/index.html.twig', array(
            'listMotorisations' => $listMotorisations,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $motorisation = $em->getRepository('BenchmarkingBundle:Motorisation')->find($id);

        
        if (null === $motorisation) {
            throw new NotFoundHttpException("La motorisation d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:Motorisation/view.html.twig', array(
            'motorisation' => $motorisation,
        ));
    }

    public function addAction(Request $request){

        $motorisation = new Motorisation();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(MotorisationType::class, $motorisation);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($motorisation);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Motorisation bien enregistrée.');

                // On redirige vers la page de visualisation de cette motorisation
                return $this->redirectToRoute('motorisation_view', array('id' => $motorisation->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:Motorisation/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $motorisation = $em->getRepository('BenchmarkingBundle:Motorisation')->find($id);

        if (null === $motorisation) {
            throw new NotFoundHttpException("La motorisation d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(MotorisationType::class, $motorisation);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($motorisation);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Motorisation bien modifiée.');

                return $this->redirectToRoute('motorisation_view', array('id' => $motorisation->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:Motorisation/edit.html.twig', array(
            'form' => $form->createView(),
            'motorisation' => $motorisation,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $motorisation = $em->getRepository('BenchmarkingBundle:Motorisation')->find($id);

        if (null === $motorisation) {
            throw new NotFoundHttpException("La motorisation d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de motorisatin contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($motorisation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La motorisation a bien été supprimée.");

            return $this->redirectToRoute('motorisations');
        }

        return $this->render('BenchmarkingBundle:Default:Motorisation/delete.html.twig', array(
            'motorisation' => $motorisation,
            'form'   => $form->createView(),
        ));
    }
}
