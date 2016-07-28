<?php

/* @Benchmarking/Default/TailleEcran/add.html.twig */
class __TwigTemplate_22493b3a5eb04f78e8c8ab0af818c3679f22002f23a43ebe11d1b9bf3a19410b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TailleEcran/add.html.twig", 3);
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
        $__internal_05ec94ce64345d34085a76aa752cfb849424724f56856b2b3f53e644a2c82991 = $this->env->getExtension("native_profiler");
        $__internal_05ec94ce64345d34085a76aa752cfb849424724f56856b2b3f53e644a2c82991->enter($__internal_05ec94ce64345d34085a76aa752cfb849424724f56856b2b3f53e644a2c82991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ec94ce64345d34085a76aa752cfb849424724f56856b2b3f53e644a2c82991->leave($__internal_05ec94ce64345d34085a76aa752cfb849424724f56856b2b3f53e644a2c82991_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_99a9d9e41d68e339c7e2ecaa3e353106e0da6198f36eb6c2780403d1d4976a0e = $this->env->getExtension("native_profiler");
        $__internal_99a9d9e41d68e339c7e2ecaa3e353106e0da6198f36eb6c2780403d1d4976a0e->enter($__internal_99a9d9e41d68e339c7e2ecaa3e353106e0da6198f36eb6c2780403d1d4976a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_99a9d9e41d68e339c7e2ecaa3e353106e0da6198f36eb6c2780403d1d4976a0e->leave($__internal_99a9d9e41d68e339c7e2ecaa3e353106e0da6198f36eb6c2780403d1d4976a0e_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_138b201a9691ae36a781d6e52c01ad836c1a2672aa2cd1a3ab3bd93e23b15549 = $this->env->getExtension("native_profiler");
        $__internal_138b201a9691ae36a781d6e52c01ad836c1a2672aa2cd1a3ab3bd93e23b15549->enter($__internal_138b201a9691ae36a781d6e52c01ad836c1a2672aa2cd1a3ab3bd93e23b15549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une taille d'écran</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TailleEcran/form.html.twig");
        echo "

  <p>
    Cette taille d'écran sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_138b201a9691ae36a781d6e52c01ad836c1a2672aa2cd1a3ab3bd93e23b15549->leave($__internal_138b201a9691ae36a781d6e52c01ad836c1a2672aa2cd1a3ab3bd93e23b15549_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TailleEcran/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TailleEcran/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une taille d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une taille d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TailleEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette taille d'écran sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
