<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\Vehicule;
use BenchmarkingBundle\Form\VehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class VehiculeController extends Controller
{
    public function indexAction()
    {
        return $this->render('BenchmarkingBundle:Default:Vehicule/index.html.twig');
    }
    public function viewAction($id)
    {
        return $this->render('BenchmarkingBundle:Default:Vehicule/view.html.twig', array(
            "id" => $id
        ));
    }

    public function rechercheAction()
    {
        return $this->render('BenchmarkingBundle:Default:Vehicule/recherche.html.twig');
    }


    public function menuAction($limit)
    {
   
        $listVehicules = $this->getDoctrine()->getManager()->getRepository('BenchmarkingBundle:Vehicule')->findBy(
            array(),                  //pas de critère
            array('date' => 'desc'),  //date décroissante
            $limit,                   //limite d'affichage
            0                         //dès le premier élémént
        );

        return $this->render('BenchmarkingBundle:Vehicule:menu.html.twig', array(

            'listVehicules' => $listVehicules
        ));
    }

    public function addAction(Request $request)
    {
            $vehicule = new Vehicule();
            // Création du formBuilder
            $form = $this->createForm(VehiculeType::class, $vehicule);

            // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
            if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($vehicule);

                //$em->detach($vehicule);

                echo 2222;

                $em->flush();

                echo 4444;
                exit;

                $request->getSession()->getFlashBag()->add('info', 'Véhicule bien enregistrée.');

                // On redirige vers la page de visualisation de ce véhicule
                // return $this->redirectToRoute('vehicule_view', array('id' => $vehicule->getId()));
            }


        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:Vehicule/add.html.twig', array(
            'form' => $form->createView(),
        ));

    }

  
}
