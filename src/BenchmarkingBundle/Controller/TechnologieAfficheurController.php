<?php

namespace BenchmarkingBundle\Controller;


use BenchmarkingBundle\Entity\TechnologieAfficheur;
use BenchmarkingBundle\Form\TechnologieAfficheurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TechnologieAfficheurController extends Controller
{

    public function indexAction()
    {

        $listTechnologiesAfficheur = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:TechnologieAfficheur')->findAll();


        return $this->render('BenchmarkingBundle:Default:TechnologieAfficheur/index.html.twig', array(
            'listTechnologiesAfficheur' => $listTechnologiesAfficheur,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $technologieAfficheur = $em->getRepository('BenchmarkingBundle:TechnologieAfficheur')->find($id);

        
        if (null === $technologieAfficheur) {
            throw new NotFoundHttpException("La technologie afficheur d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:TechnologieAfficheur/view.html.twig', array(
            'technologieAfficheur' => $technologieAfficheur,
        ));
    }

    public function addAction(Request $request){

        $technologieAfficheur = new TechnologieAfficheur();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(TechnologieAfficheurType::class, $technologieAfficheur);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($technologieAfficheur);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'La technologie afficheur a été bien enregistrée.');

                // On redirige vers la page de visualisation de l'afficheur
                return $this->redirectToRoute('technologieAfficheur_view', array('id' => $technologieAfficheur->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:TechnologieAfficheur/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $technologieAfficheur = $em->getRepository('BenchmarkingBundle:TechnologieAfficheur')->find($id);

        if (null === $technologieAfficheur) {
            throw new NotFoundHttpException("La technologie afficheur d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(TechnologieAfficheurType::class, $technologieAfficheur);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($technologieAfficheur);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Technologie afficheur a été bien modifiée.');

                return $this->redirectToRoute('technologieAfficheur_view', array('id' => $technologieAfficheur->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:TechnologieAfficheur/edit.html.twig', array(
            'form' => $form->createView(),
            'technologieAfficheur' => $technologieAfficheur,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $technologieAfficheur = $em->getRepository('BenchmarkingBundle:TechnologieAfficheur')->find($id);

        if (null === $technologieAfficheur) {
            throw new NotFoundHttpException("La technologie afficheur d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de la technologie afficheur contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($technologieAfficheur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'afficheur a bien été supprimé.");

            return $this->redirectToRoute('afficheurs');
        }

        return $this->render('BenchmarkingBundle:Default:TechnologieAfficheur/delete.html.twig', array(
            'technologieAfficheur' => $technologieAfficheur,
            'form'   => $form->createView(),
        ));
    }
}
