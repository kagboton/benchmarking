<?php

/* BenchmarkingBundle:Default/TypeTdB:add.html.twig */
class __TwigTemplate_29bccfc38173195020411642c1820a56b2dd9d019fd0a1a660405719c83b9f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeTdB:add.html.twig", 3);
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
        $__internal_c49ff42284da72d4fa2b1a948d78546885ab4bbff4cdfbfdea49c5798b83a8fb = $this->env->getExtension("native_profiler");
        $__internal_c49ff42284da72d4fa2b1a948d78546885ab4bbff4cdfbfdea49c5798b83a8fb->enter($__internal_c49ff42284da72d4fa2b1a948d78546885ab4bbff4cdfbfdea49c5798b83a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49ff42284da72d4fa2b1a948d78546885ab4bbff4cdfbfdea49c5798b83a8fb->leave($__internal_c49ff42284da72d4fa2b1a948d78546885ab4bbff4cdfbfdea49c5798b83a8fb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1649d02f924510f52fde14acd6f26605f0f27849d3477f5d0c591e0ada51329 = $this->env->getExtension("native_profiler");
        $__internal_c1649d02f924510f52fde14acd6f26605f0f27849d3477f5d0c591e0ada51329->enter($__internal_c1649d02f924510f52fde14acd6f26605f0f27849d3477f5d0c591e0ada51329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c1649d02f924510f52fde14acd6f26605f0f27849d3477f5d0c591e0ada51329->leave($__internal_c1649d02f924510f52fde14acd6f26605f0f27849d3477f5d0c591e0ada51329_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_811ec62e3471d66f1ccba55ad64e2e0bbaee41cd7c029d5d1ed177b420393130 = $this->env->getExtension("native_profiler");
        $__internal_811ec62e3471d66f1ccba55ad64e2e0bbaee41cd7c029d5d1ed177b420393130->enter($__internal_811ec62e3471d66f1ccba55ad64e2e0bbaee41cd7c029d5d1ed177b420393130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un type de tableau de bord</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeTdB/form.html.twig");
        echo "

  <p>
    Ce type de tableau de bord sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_811ec62e3471d66f1ccba55ad64e2e0bbaee41cd7c029d5d1ed177b420393130->leave($__internal_811ec62e3471d66f1ccba55ad64e2e0bbaee41cd7c029d5d1ed177b420393130_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeTdB:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeTdB/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un type de tableau de bord - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un type de tableau de bord</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeTdB/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce type de tableau de bord sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
