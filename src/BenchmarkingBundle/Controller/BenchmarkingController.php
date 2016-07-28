<?php

namespace BenchmarkingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BenchmarkingController extends Controller
{
    public function accueilAction(){
        return $this->render('::layout/layout.html.twig');
    }


}
