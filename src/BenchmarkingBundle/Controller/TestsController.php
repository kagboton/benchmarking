<?php

namespace BenchmarkingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestsController extends Controller
{
    public function testsAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('BenchmarkingBundle:BoiteVitesse');

        //$listeBoitesVitesse = $repository->myFindAll();
        $boiteVitesse = $repository->myFindOne($id);

        return $this->render('BenchmarkingBundle:Default:tests.html.twig', array('listeBoitesVitesse'=> $listeBoitesVitesse));
    }
}
