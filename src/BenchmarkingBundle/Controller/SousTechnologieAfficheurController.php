<?php

namespace BenchmarkingBundle\Controller;


use BenchmarkingBundle\Entity\SousTechnologieAfficheur;
use BenchmarkingBundle\Form\SousTechnologieAfficheurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SousTechnologieAfficheurController extends Controller
{

    public function indexAction()
    {

        $listSousTechnologiesAfficheur = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:SousTechnologieAfficheur')->findAll();


        return $this->render('BenchmarkingBundle:Default:SousTechnologieAfficheur/index.html.twig', array(
            'listSousTechnologiesAfficheur' => $listSousTechnologiesAfficheur,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $sousTechnologieAfficheur = $em->getRepository('BenchmarkingBundle:SousTechnologieAfficheur')->find($id);

        
        if (null === $sousTechnologieAfficheur) {
            throw new NotFoundHttpException("La sous technologie afficheur d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:SousTechnologieAfficheur/view.html.twig', array(
            'sousTechnologieAfficheur' => $sousTechnologieAfficheur,
        ));
    }

    public function addAction(Request $request){

        $sousTechnologieAfficheur = new SousTechnologieAfficheur();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(SousTechnologieAfficheurType::class, $sousTechnologieAfficheur);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($sousTechnologieAfficheur);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'La sous technologie afficheur a été bien enregistrée.');

                // On redirige vers la page de visualisation de l'afficheur
                return $this->redirectToRoute('sousTechnologieAfficheur_view', array('id' => $sousTechnologieAfficheur->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:SousTechnologieAfficheur/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $sousTechnologieAfficheur = $em->getRepository('BenchmarkingBundle:SousTechnologieAfficheur')->find($id);

        if (null === $sousTechnologieAfficheur) {
            throw new NotFoundHttpException("La sous technologie afficheur d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(SousTechnologieAfficheurType::class, $sousTechnologieAfficheur);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($sousTechnologieAfficheur);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'La sous technologie afficheur a été bien modifiée.');

                return $this->redirectToRoute('sousTechnologieAfficheur_view', array('id' => $sousTechnologieAfficheur->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:SousTechnologieAfficheur/edit.html.twig', array(
            'form' => $form->createView(),
            'sousTechnologieAfficheur' => $sousTechnologieAfficheur,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $sousTechnologieAfficheur = $em->getRepository('BenchmarkingBundle:SousTechnologieAfficheur')->find($id);

        if (null === $sousTechnologieAfficheur) {
            throw new NotFoundHttpException("La technologie afficheur d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de la technologie afficheur contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($sousTechnologieAfficheur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'afficheur a bien été supprimé.");

            return $this->redirectToRoute('afficheurs');
        }

        return $this->render('BenchmarkingBundle:Default:SousTechnologieAfficheur/delete.html.twig', array(
            'sousTechnologieAfficheur' => $sousTechnologieAfficheur,
            'form'   => $form->createView(),
        ));
    }
}
