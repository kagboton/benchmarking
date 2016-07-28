<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\Famille;
use BenchmarkingBundle\Form\FamilleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FamilleController extends Controller
{

    public function indexAction()
    {

        $listFamilles = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:Famille')->findAll();


        return $this->render('BenchmarkingBundle:Default:Famille/index.html.twig', array(
            'listFamilles' => $listFamilles,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $famille = $em->getRepository('BenchmarkingBundle:Famille')->find($id);

        
        if (null === $famille) {
            throw new NotFoundHttpException("La famille d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:Famille/view.html.twig', array(
            'famille' => $famille,
        ));
    }

    public function addAction(Request $request){

        $famille = new Famille();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(FamilleType::class, $famille);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($famille);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Famille de fonctions bien enregistrée.');

                // On redirige vers la page de visualisation de cette famille
                return $this->redirectToRoute('famille_view', array('id' => $famille->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:Famille/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $famille = $em->getRepository('BenchmarkingBundle:Famille')->find($id);

        if (null === $famille) {
            throw new NotFoundHttpException("La famille de fonctions d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(FamilleType::class, $famille);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($famille);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Famille de fonctions bien modifiée.');

                return $this->redirectToRoute('famille_view', array('id' => $famille->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:Famille/edit.html.twig', array(
            'form' => $form->createView(),
            'famille' => $famille,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $famille = $em->getRepository('BenchmarkingBundle:Famille')->find($id);

        if (null === $famille) {
            throw new NotFoundHttpException("La famille de fonctions d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de la famille de fonctions contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($famille);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La famille de fonctions a bien été supprimée.");

            return $this->redirectToRoute('familles');
        }

        return $this->render('BenchmarkingBundle:Default:Famille/delete.html.twig', array(
            'famille' => $famille,
            'form'   => $form->createView(),
        ));
    }
}
