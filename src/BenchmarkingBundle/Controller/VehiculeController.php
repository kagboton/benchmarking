<?php

namespace BenchmarkingBundle\Controller;

use BenchmarkingBundle\Entity\Vehicule;
use BenchmarkingBundle\Form\VehiculeAddType;
use BenchmarkingBundle\Form\VehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class VehiculeController extends Controller
{
    
    public function indexAction($page)
    {
        if ($page < 1) {
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }

        // Ici je fixe le nombre de véhicules par page à 9
        // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
        $nbPerPage = 9;

        
        // On récupère notre objet Paginator
        $listVehicules = $this->getDoctrine()
            ->getManager()
            ->getRepository('BenchmarkingBundle:Vehicule')
            ->getVehicules($page, $nbPerPage)
        ;

        // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total de véhicules
        $nbPages = ceil(count($listVehicules) / $nbPerPage);

        // Si la page n'existe pas, on retourne une 404
        if ($page > $nbPages) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        // On donne toutes les informations nécessaires à la vue
        return $this->render('BenchmarkingBundle:Default:Vehicule/index.html.twig', array(
            'listVehicules' => $listVehicules,
            'nbPages'     => $nbPages,
            'page'        => $page,
        ));
    }
    
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $vehicule = $em->getRepository('BenchmarkingBundle:Vehicule')->find($id);


        if (null === $vehicule) {
            throw new NotFoundHttpException("Le véhicule d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:Vehicule/view.html.twig', array(
            "vehicule" => $vehicule
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
                

                $em->flush();
                
                $request->getSession()->getFlashBag()->add('info', 'Véhicule bien enregistré.');

                // On redirige vers la page d'accueil
                 return $this->redirectToRoute('admin_homepage');
            }


        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:Vehicule/add.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $vehicule = $em->getRepository('BenchmarkingBundle:Vehicule')->find($id);

        if (null === $vehicule) {
            throw new NotFoundHttpException("Le véhicule d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression du véhicule contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($vehicule);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le véhicule a bien été supprimé.");

            return $this->redirectToRoute('vehicules');
        }

        return $this->render('BenchmarkingBundle:Default:Vehicule/delete.html.twig', array(
            'vehicule' => $vehicule,
            'form'   => $form->createView(),
        ));
    }

/*
    public function menuAction($limit)
    {
        $em = $this->getDoctrine()->getManager();

        $listVehicules = $em->getRepository('BenchmarkingBundle:Advert')->findBy(
            array(),                 // Pas de critère
            array('date' => 'desc'), // On trie par date décroissante
            $limit,                  // On sélectionne $limit annonces
            0                        // À partir du premier
        );

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listVehicules' => $listVehicules
        ));
    }
*/
  
}
