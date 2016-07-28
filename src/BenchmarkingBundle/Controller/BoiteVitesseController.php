<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\BoiteVitesse;
use BenchmarkingBundle\Form\BoiteVitesseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class BoiteVitesseController extends Controller
{

    public function indexAction()
    {

        $listBoitesVitesse = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:BoiteVitesse')->findAll();


        return $this->render('BenchmarkingBundle:Default:BoiteVitesse/index.html.twig', array(
            'listBoitesVitesse' => $listBoitesVitesse,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $boiteVitesse = $em->getRepository('BenchmarkingBundle:BoiteVitesse')->find($id);

        
        if (null === $boiteVitesse) {
            throw new NotFoundHttpException("La boîte vitesse d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:BoiteVitesse/view.html.twig', array(
            'boiteVitesse' => $boiteVitesse,
        ));
    }

    public function addAction(Request $request){

        $boiteVitesse = new BoiteVitesse();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(BoiteVitesseType::class, $boiteVitesse);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($boiteVitesse);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Boîte vitesse bien enregistrée.');

                // On redirige vers la page de visualisation de cette boîte de vitess
                return $this->redirectToRoute('boiteVitesse_view', array('id' => $boiteVitesse->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:BoiteVitesse/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $boiteVitesse = $em->getRepository('BenchmarkingBundle:BoiteVitesse')->find($id);

        if (null === $boiteVitesse) {
            throw new NotFoundHttpException("La boîte à vitesse d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(BoiteVitesseType::class, $boiteVitesse);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($boiteVitesse);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Boîte vitesse bien modifiée.');

                return $this->redirectToRoute('boiteVitesse_view', array('id' => $boiteVitesse->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:BoiteVitesse/edit.html.twig', array(
            'form' => $form->createView(),
            'boiteVitesse' => $boiteVitesse,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $boiteVitesse = $em->getRepository('BenchmarkingBundle:BoiteVitesse')->find($id);

        if (null === $boiteVitesse) {
            throw new NotFoundHttpException("La boîte à vitesse d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de boîte à vitesse contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($boiteVitesse);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La boîte à vitesse a bien été supprimée.");

            return $this->redirectToRoute('boitesVitesse');
        }

        return $this->render('BenchmarkingBundle:Default:BoiteVitesse/delete.html.twig', array(
            'boiteVitesse' => $boiteVitesse,
            'form'   => $form->createView(),
        ));
    }
}
