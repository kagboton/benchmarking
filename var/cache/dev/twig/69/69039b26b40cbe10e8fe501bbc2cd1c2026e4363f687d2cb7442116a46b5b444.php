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
        $__internal_ae6c8e4df8f59977d53a34392e0110c6585155fcedc0a7aa455def7c14fcb1e1 = $this->env->getExtension("native_profiler");
        $__internal_ae6c8e4df8f59977d53a34392e0110c6585155fcedc0a7aa455def7c14fcb1e1->enter($__internal_ae6c8e4df8f59977d53a34392e0110c6585155fcedc0a7aa455def7c14fcb1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/SousTechnologieAfficheur/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae6c8e4df8f59977d53a34392e0110c6585155fcedc0a7aa455def7c14fcb1e1->leave($__internal_ae6c8e4df8f59977d53a34392e0110c6585155fcedc0a7aa455def7c14fcb1e1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_77ef95bf6517aeb80a9953243fc220913d854b5b3efbb59437e74e09166355b5 = $this->env->getExtension("native_profiler");
        $__internal_77ef95bf6517aeb80a9953243fc220913d854b5b3efbb59437e74e09166355b5->enter($__internal_77ef95bf6517aeb80a9953243fc220913d854b5b3efbb59437e74e09166355b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_77ef95bf6517aeb80a9953243fc220913d854b5b3efbb59437e74e09166355b5->leave($__internal_77ef95bf6517aeb80a9953243fc220913d854b5b3efbb59437e74e09166355b5_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_a9bcc288f8e1e221e77b1c98722678e019712c00165c793f0e84470e51b357dd = $this->env->getExtension("native_profiler");
        $__internal_a9bcc288f8e1e221e77b1c98722678e019712c00165c793f0e84470e51b357dd->enter($__internal_a9bcc288f8e1e221e77b1c98722678e019712c00165c793f0e84470e51b357dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_a9bcc288f8e1e221e77b1c98722678e019712c00165c793f0e84470e51b357dd->leave($__internal_a9bcc288f8e1e221e77b1c98722678e019712c00165c793f0e84470e51b357dd_prof);

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
