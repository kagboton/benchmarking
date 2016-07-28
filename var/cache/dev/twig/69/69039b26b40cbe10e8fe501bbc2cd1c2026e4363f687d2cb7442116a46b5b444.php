<?php

/* @Benchmarking/Default/SousTechnologieAfficheur/add.html.twig */
class __TwigTemplate_b3a42086a3f870ca079d6ec436d7bb75c0504ccdf26893f4eae0744092d27a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/SousTechnologieAfficheur/add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d757af8b57934d2671f4d796d060a5374f0a52f1cda7221a9c5f0ce5da7df797 = $this->env->getExtension("native_profiler");
        $__internal_d757af8b57934d2671f4d796d060a5374f0a52f1cda7221a9c5f0ce5da7df797->enter($__internal_d757af8b57934d2671f4d796d060a5374f0a52f1cda7221a9c5f0ce5da7df797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/SousTechnologieAfficheur/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d757af8b57934d2671f4d796d060a5374f0a52f1cda7221a9c5f0ce5da7df797->leave($__internal_d757af8b57934d2671f4d796d060a5374f0a52f1cda7221a9c5f0ce5da7df797_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_54a87906ec8b1bd31eab4d53996a7962933c8c19692950bcad2f5532e40874f8 = $this->env->getExtension("native_profiler");
        $__internal_54a87906ec8b1bd31eab4d53996a7962933c8c19692950bcad2f5532e40874f8->enter($__internal_54a87906ec8b1bd31eab4d53996a7962933c8c19692950bcad2f5532e40874f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_54a87906ec8b1bd31eab4d53996a7962933c8c19692950bcad2f5532e40874f8->leave($__internal_54a87906ec8b1bd31eab4d53996a7962933c8c19692950bcad2f5532e40874f8_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_20d8f7d4354eb550635c7d95f83f107dfd91be77d9d27855745af82ec4b30434 = $this->env->getExtension("native_profiler");
        $__internal_20d8f7d4354eb550635c7d95f83f107dfd91be77d9d27855745af82ec4b30434->enter($__internal_20d8f7d4354eb550635c7d95f83f107dfd91be77d9d27855745af82ec4b30434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une sous technologie afficheur</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig");
        echo "

  <p>
    Cette sous technologie sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_20d8f7d4354eb550635c7d95f83f107dfd91be77d9d27855745af82ec4b30434->leave($__internal_20d8f7d4354eb550635c7d95f83f107dfd91be77d9d27855745af82ec4b30434_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/SousTechnologieAfficheur/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/SousTechnologieAfficheur/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une sous technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une sous technologie afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette sous technologie sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
