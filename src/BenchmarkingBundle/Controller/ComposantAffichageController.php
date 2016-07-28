<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\ComposantAffichage;
use BenchmarkingBundle\Form\ListeComposantsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ComposantAffichageController extends Controller
{

    public function indexAction()
    {

        $listComposantsAffichage = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:ComposantAffichage')->findAll();


        return $this->render('BenchmarkingBundle:Default:ComposantAffichage/index.html.twig', array(
            'listComposantsAffichage' => $listComposantsAffichage,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $composantAffichage = $em->getRepository('BenchmarkingBundle:ComposantAffichage')->find($id);


        if (null === $composantAffichage) {
            throw new NotFoundHttpException("Le composant d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:ComposantAffichage/view.html.twig', array(
            'composantAffichage' => $composantAffichage,
        ));
    }

    public function addAction(Request $request){

        $composantAffichage = new ComposantAffichage();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(ListeComposantsType::class, $composantAffichage);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($composantAffichage);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Composant bien enregistré.');

                // On redirige vers la page de visualisation de cette boîte de vitess
                return $this->redirectToRoute('composantAffichage_view', array('id' => $composantAffichage->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:ComposantAffichage/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $composantAffichage = $em->getRepository('BenchmarkingBundle:ComposantAffichage')->find($id);

        if (null === $composantAffichage) {
            throw new NotFoundHttpException("Le composant d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(ListeComposantsType::class, $composantAffichage);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($composantAffichage);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Composant bien modifié.');

                return $this->redirectToRoute('composantAffichage_view', array('id' => $composantAffichage->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:ComposantAffichage/edit.html.twig', array(
            'form' => $form->createView(),
            'composantAffichage' => $composantAffichage,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $composantAffichage = $em->getRepository('BenchmarkingBundle:ComposantAffichage')->find($id);

        if (null === $composantAffichage) {
            throw new NotFoundHttpException("Le composant d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression du composant contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($composantAffichage);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le composant a bien été supprimée.");

            return $this->redirectToRoute('composantsAffichage');
        }

        return $this->render('BenchmarkingBundle:Default:ComposantAffichage/delete.html.twig', array(
            'composantAffichage' => $composantAffichage,
            'form'   => $form->createView(),
        ));
    }
}
