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
        $__internal_0827ddbc91965362d524d5826d17e6e169d58621e36f9cef509b03763e1aa935 = $this->env->getExtension("native_profiler");
        $__internal_0827ddbc91965362d524d5826d17e6e169d58621e36f9cef509b03763e1aa935->enter($__internal_0827ddbc91965362d524d5826d17e6e169d58621e36f9cef509b03763e1aa935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0827ddbc91965362d524d5826d17e6e169d58621e36f9cef509b03763e1aa935->leave($__internal_0827ddbc91965362d524d5826d17e6e169d58621e36f9cef509b03763e1aa935_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_101efb9c161019d973dab32d060376f221f8c966437659f88ba466a9dfd09abd = $this->env->getExtension("native_profiler");
        $__internal_101efb9c161019d973dab32d060376f221f8c966437659f88ba466a9dfd09abd->enter($__internal_101efb9c161019d973dab32d060376f221f8c966437659f88ba466a9dfd09abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_101efb9c161019d973dab32d060376f221f8c966437659f88ba466a9dfd09abd->leave($__internal_101efb9c161019d973dab32d060376f221f8c966437659f88ba466a9dfd09abd_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_c117130a745b530db1bb7920004b11089ab077b6c6830936d625ab66d3ccb0e6 = $this->env->getExtension("native_profiler");
        $__internal_c117130a745b530db1bb7920004b11089ab077b6c6830936d625ab66d3ccb0e6->enter($__internal_c117130a745b530db1bb7920004b11089ab077b6c6830936d625ab66d3ccb0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_c117130a745b530db1bb7920004b11089ab077b6c6830936d625ab66d3ccb0e6->leave($__internal_c117130a745b530db1bb7920004b11089ab077b6c6830936d625ab66d3ccb0e6_prof);

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
