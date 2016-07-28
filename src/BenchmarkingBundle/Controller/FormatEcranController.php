<?php

namespace BenchmarkingBundle\Controller;


use BenchmarkingBundle\Entity\FormatEcran;
use BenchmarkingBundle\Form\FormatEcranType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FormatEcranController extends Controller
{

    public function indexAction()
    {

        $listFormatsEcran = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:FormatEcran')->findAll();


        return $this->render('BenchmarkingBundle:Default:FormatEcran/index.html.twig', array(
            'listFormatsEcran' => $listFormatsEcran,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $formatEcran = $em->getRepository('BenchmarkingBundle:FormatEcran')->find($id);

        
        if (null === $formatEcran) {
            throw new NotFoundHttpException("Le Format d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:FormatEcran/view.html.twig', array(
            'formatEcran' => $formatEcran,
        ));
    }

    public function addAction(Request $request){

        $formatEcran = new FormatEcran();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(FormatEcranType::class, $formatEcran);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($formatEcran);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Le Format a été bien enregistré.');

                // On redirige vers la page de visualisation de l'afficheur
                return $this->redirectToRoute('formatEcran_view', array('id' => $formatEcran->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:FormatEcran/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $formatEcran = $em->getRepository('BenchmarkingBundle:FormatEcran')->find($id);

        if (null === $formatEcran) {
            throw new NotFoundHttpException("Le Format d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(FormatEcranType::class, $formatEcran);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($formatEcran);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Le Format a été bien modifié.');

                return $this->redirectToRoute('formatEcran_view', array('id' => $formatEcran->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:FormatEcran/edit.html.twig', array(
            'form' => $form->createView(),
            'formatEcran' => $formatEcran,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $formatEcran = $em->getRepository('BenchmarkingBundle:FormatEcran')->find($id);

        if (null === $formatEcran) {
            throw new NotFoundHttpException("Le Format d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression du format d'écran contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($formatEcran);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le Format à été bien supprimé.");

            return $this->redirectToRoute('formatsEcran');
        }

        return $this->render('BenchmarkingBundle:Default:FormatEcran/delete.html.twig', array(
            'formatEcran' => $formatEcran,
            'form'   => $form->createView(),
        ));
    }
}
