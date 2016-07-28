<?php

namespace BenchmarkingBundle\Controller;


use BenchmarkingBundle\Entity\FonctionExistante;
use BenchmarkingBundle\Form\FonctionExistanteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FonctionController extends Controller
{

    public function indexAction()
    {
        
        $listFamilles = $this->getDoctrine()->getManager()
            ->getRepository('BenchmarkingBundle:Famille')->findAll();

        $listFonctions = $this->getDoctrine()->getManager()
            ->getRepository('BenchmarkingBundle:FonctionExistante')->findAll();
        

        return $this->render('BenchmarkingBundle:Default:FonctionExistante/index.html.twig', array(
            'listFonctions' => $listFonctions,
            'listFamilles' => $listFamilles,
        ));

    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fonction = $em->getRepository('BenchmarkingBundle:FonctionExistante')->find($id);

        
        if (null === $fonction) {
            throw new NotFoundHttpException("La fonction d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:FonctionExistante/view.html.twig', array(
            'fonction' => $fonction,
        ));
    }

    public function addAction(Request $request){

        $fonction = new FonctionExistante();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(FonctionExistanteType::class, $fonction);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($fonction);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Fonction bien enregistrée.');

                // On redirige vers la page de visualisation de cette fonction
                return $this->redirectToRoute('fonction_view', array('id' => $fonction->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:FonctionExistante/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $fonction = $em->getRepository('BenchmarkingBundle:FonctionExistante')->find($id);

        if (null === $fonction) {
            throw new NotFoundHttpException("La fonction d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(FonctionExistanteType::class, $fonction);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($fonction);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Fonction bien modifié.');

                return $this->redirectToRoute('fonction_view', array('id' => $fonction->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:FonctionExistante/edit.html.twig', array(
            'form' => $form->createView(),
            'fonction' => $fonction,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $fonction = $em->getRepository('BenchmarkingBundle:FonctionExistante')->find($id);

        if (null === $fonction) {
            throw new NotFoundHttpException("La fonction d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de segement contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($fonction);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La fonction a bien été supprimé.");

            return $this->redirectToRoute('fonctions');
        }

        return $this->render('BenchmarkingBundle:Default:FonctionExistante/delete.html.twig', array(
            'fonction' => $fonction,
            'form'   => $form->createView(),
        ));
    }
}
