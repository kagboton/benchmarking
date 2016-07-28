<?php

namespace BenchmarkingBundle\Controller;


use BenchmarkingBundle\Entity\TypeTdB;
use BenchmarkingBundle\Form\TypeTdBType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TypeTdBController extends Controller
{

    public function indexAction()
    {

        $listTypesTdB = $this->getDoctrine()
            ->getManager()->getRepository('BenchmarkingBundle:TypeTdB')->findAll();


        return $this->render('BenchmarkingBundle:Default:TypeTdB/index.html.twig', array(
            'listTypesTdB' => $listTypesTdB,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $typeTdB = $em->getRepository('BenchmarkingBundle:TypeTdB')->find($id);

        
        if (null === $typeTdB) {
            throw new NotFoundHttpException("Le type de tableau de bord d'id ".$id." n'existe pas.");
        }

        return $this->render('BenchmarkingBundle:Default:TypeTdB/view.html.twig', array(
            'typeTdB' => $typeTdB,
        ));
    }

    public function addAction(Request $request){

        $typeTdB = new TypeTdB();

        // Création du formBuilder
        $form = $this->get('form.factory')->create(TypeTdBType::class, $typeTdB);

        // Vérifier si c'est une méthode POST && Vérifier la validité des donnéees
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();
                $em->persist($typeTdB);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Le type de tableau de bord a été bien enregistré.');

                // On redirige vers la page de visualisation de l'afficheur
                return $this->redirectToRoute('typeTdB_view', array('id' => $typeTdB->getId()));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('BenchmarkingBundle:Default:TypeTdB/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $typeTdB = $em->getRepository('BenchmarkingBundle:TypeTdB')->find($id);

        if (null === $typeTdB) {
            throw new NotFoundHttpException("Le type de tableau de bord d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(TypeTdBType::class, $typeTdB);

        if ($request->isMethod('POST') &&$form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($typeTdB);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Le type de tableau de bord a été bien modifié.');

                return $this->redirectToRoute('typeTdB_view', array('id' => $typeTdB->getId()));
        }


        return $this->render('BenchmarkingBundle:Default:TypeTdB/edit.html.twig', array(
            'form' => $form->createView(),
            'typeTdB' => $typeTdB,
        ));

    }


    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $typeTdB = $em->getRepository('BenchmarkingBundle:TypeTdB')->find($id);

        if (null === $typeTdB) {
            throw new NotFoundHttpException("Le type de tableau de bord d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression du type de tableau de bord contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($typeTdB);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le type de tableau de bord à été bien supprimé.");

            return $this->redirectToRoute('typesTdB');
        }

        return $this->render('BenchmarkingBundle:Default:TypeTdB/delete.html.twig', array(
            'typeTdB' => $typeTdB,
            'form'   => $form->createView(),
        ));
    }
}
