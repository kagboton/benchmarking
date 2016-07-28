<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\Marque;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BenchmarkingBundle\Form\MarqueType;
use Symfony\Component\HttpFoundation\Request;


class MarqueController extends Controller
{

    public function indexAction()
    {

        $listMarques = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:Marque')->findAll();


        return $this->render('BenchmarkingBundle:Default:Marque/index.html.twig', array(
            'listMarques' => $listMarques,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $marque = $em->getRepository('BenchmarkingBundle:Marque')->find($id);

        
        if (null === $marque) {
            throw new NotFoundHttpException("La marque d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:Marque/view.html.twig', array(
            'marque' => $marque,
        ));
    }

    public function addAction(Request $request){

        $marque = new Marque();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(MarqueType::class, $marque);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($marque);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Marque bien enregistrée.');

                // On redirige vers la page de visualisation de cette marque
                return $this->redirectToRoute('marque_view', array('id' => $marque->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:Marque/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $marque = $em->getRepository('BenchmarkingBundle:Marque')->find($id);

        if (null === $marque) {
            throw new NotFoundHttpException("La marque d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(MarqueType::class, $marque);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($marque);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Marque bien modifiée.');

                return $this->redirectToRoute('marque_view', array('id' => $marque->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:Marque/edit.html.twig', array(
            'form' => $form->createView(),
            'marque' => $marque,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $marque = $em->getRepository('BenchmarkingBundle:Marque')->find($id);

        if (null === $marque) {
            throw new NotFoundHttpException("La marque d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de marque contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($marque);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La marque a bien été supprimée.");

            return $this->redirectToRoute('marques');
        }

        return $this->render('BenchmarkingBundle:Default:Marque/delete.html.twig', array(
            'marque' => $marque,
            'form'   => $form->createView(),
        ));
    }
}
