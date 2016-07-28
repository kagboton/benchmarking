<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\Segment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BenchmarkingBundle\Form\SegmentType;
use Symfony\Component\HttpFoundation\Request;


class SegmentController extends Controller
{

    public function indexAction()
    {

        $listSegments = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:Segment')->findAll();


        return $this->render('BenchmarkingBundle:Default:Segment/index.html.twig', array(
            'listSegments' => $listSegments,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $segment = $em->getRepository('BenchmarkingBundle:Segment')->find($id);

        
        if (null === $segment) {
            throw new NotFoundHttpException("Le segment d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:Segment/view.html.twig', array(
            'segment' => $segment,
        ));
    }

    public function addAction(Request $request){

        $segment = new Segment();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(SegmentType::class, $segment);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($segment);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Segment bien enregistrée.');

                // On redirige vers la page de visualisation de ce segment
                return $this->redirectToRoute('segment_view', array('id' => $segment->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:Segment/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $segment = $em->getRepository('BenchmarkingBundle:Segment')->find($id);

        if (null === $segment) {
            throw new NotFoundHttpException("Le segment d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(SegmentType::class, $segment);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($segment);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Segment bien modifié.');

                return $this->redirectToRoute('segment_view', array('id' => $segment->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:Segment/edit.html.twig', array(
            'form' => $form->createView(),
            'segment' => $segment,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $segment = $em->getRepository('BenchmarkingBundle:Segment')->find($id);

        if (null === $segment) {
            throw new NotFoundHttpException("Le segment d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de segement contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($segment);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le segment a bien été supprimé.");

            return $this->redirectToRoute('segments');
        }

        return $this->render('BenchmarkingBundle:Default:Segment/delete.html.twig', array(
            'segment' => $segment,
            'form'   => $form->createView(),
        ));
    }
}
