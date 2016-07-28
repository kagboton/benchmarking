<?php

namespace BenchmarkingBundle\Controller;
;
use BenchmarkingBundle\Entity\TypeRetourActivation;
use BenchmarkingBundle\Form\TypeRetourActivationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;


class RetourActivationController extends Controller
{

    public function indexAction()
    {

        $listRetoursActivation = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:TypeRetourActivation')->findAll();


        return $this->render('BenchmarkingBundle:Default:TypeRetourActivation/index.html.twig', array(
            'listRetoursActivation' => $listRetoursActivation,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $retourActivation = $em->getRepository('BenchmarkingBundle:TypeRetourActivation')->find($id);

        
        if (null === $retourActivation) {
            throw new NotFoundHttpException("Le retour d'activation d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:TypeRetourActivation/view.html.twig', array(
            'retourActivation' => $retourActivation,
        ));
    }

    public function addAction(Request $request){

        $retourActivation = new TypeRetourActivation();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(TypeRetourActivationType::class, $retourActivation);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($retourActivation);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Retour d\'activation bien enregistré.');

                // On redirige vers la page de visualisation de ce retour d'activation
                return $this->redirectToRoute('retourActivation_view', array('id' => $retourActivation->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:TypeRetourActivation/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $retourActivation = $em->getRepository('BenchmarkingBundle:TypeRetourActivation')->find($id);

        if (null === $retourActivation) {
            throw new NotFoundHttpException("Le retour d'activation d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(TypeRetourActivationType::class, $retourActivation);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($retourActivation);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Retour d\'activation bien modifié.');

                return $this->redirectToRoute('retourActivation_view', array('id' => $retourActivation->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:TypeRetourActivation/edit.html.twig', array(
            'form' => $form->createView(),
            'retourActivation' => $retourActivation,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $retourActivation= $em->getRepository('BenchmarkingBundle:TypeRetourActivation')->find($id);

        if (null === $retourActivation) {
            throw new NotFoundHttpException("Le retour d'activation d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression du retour d'activation contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($retourActivation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le retour d'activation a bien été supprimé.");

            return $this->redirectToRoute('retoursActivation');
        }

        return $this->render('BenchmarkingBundle:Default:TypeRetourActivation/delete.html.twig', array(
            'retourActivation' => $retourActivation,
            'form'   => $form->createView(),
        ));
    }
}
