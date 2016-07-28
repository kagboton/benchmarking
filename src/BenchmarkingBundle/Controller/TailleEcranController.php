<?php

namespace BenchmarkingBundle\Controller;


use BenchmarkingBundle\Entity\TailleEcran;
use BenchmarkingBundle\Form\TailleEcranType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TailleEcranController extends Controller
{

    public function indexAction()
    {

        $listTaillesEcran = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:TailleEcran')->findAll();


        return $this->render('BenchmarkingBundle:Default:TailleEcran/index.html.twig', array(
            'listTaillesEcran' => $listTaillesEcran,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $tailleEcran = $em->getRepository('BenchmarkingBundle:TailleEcran')->find($id);

        
        if (null === $tailleEcran) {
            throw new NotFoundHttpException("La taille d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:TailleEcran/view.html.twig', array(
            'tailleEcran' => $tailleEcran,
        ));
    }

    public function addAction(Request $request){

        $tailleEcran = new TailleEcran();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(TailleEcranType::class, $tailleEcran);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($tailleEcran);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'La taille a été bien enregistrée.');

                // On redirige vers la page de visualisation de l'afficheur
                return $this->redirectToRoute('tailleEcran_view', array('id' => $tailleEcran->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:TailleEcran/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $tailleEcran = $em->getRepository('BenchmarkingBundle:TailleEcran')->find($id);

        if (null === $tailleEcran) {
            throw new NotFoundHttpException("La taille d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(TailleEcranType::class, $tailleEcran);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($tailleEcran);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'La taille a été bien modifiée.');

                return $this->redirectToRoute('tailleEcran_view', array('id' => $tailleEcran->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:TailleEcran/edit.html.twig', array(
            'form' => $form->createView(),
            'tailleEcran' => $tailleEcran,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $tailleEcran = $em->getRepository('BenchmarkingBundle:TailleEcran')->find($id);

        if (null === $tailleEcran) {
            throw new NotFoundHttpException("La taille d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de la taille d'écran contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($tailleEcran);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La taille été supprimé.");

            return $this->redirectToRoute('taillesEcran');
        }

        return $this->render('BenchmarkingBundle:Default:TailleEcran/delete.html.twig', array(
            'tailleEcran' => $tailleEcran,
            'form'   => $form->createView(),
        ));
    }
}
