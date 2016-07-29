<?php

/* BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig */
class __TwigTemplate_9a69af8b1b0e2ce52393ac2cc8336a49f866f1b3d7a0be27ac8fbcb41a94445e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig", 3);
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
        $__internal_0d8ce5f22027224967266d82191fb4247007c83200c8f2c584708982751a15e4 = $this->env->getExtension("native_profiler");
        $__internal_0d8ce5f22027224967266d82191fb4247007c83200c8f2c584708982751a15e4->enter($__internal_0d8ce5f22027224967266d82191fb4247007c83200c8f2c584708982751a15e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d8ce5f22027224967266d82191fb4247007c83200c8f2c584708982751a15e4->leave($__internal_0d8ce5f22027224967266d82191fb4247007c83200c8f2c584708982751a15e4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e7b355a9c29ed69096f00280bb438a93bb2f24fcfec2faf16b2c296645947b7 = $this->env->getExtension("native_profiler");
        $__internal_7e7b355a9c29ed69096f00280bb438a93bb2f24fcfec2faf16b2c296645947b7->enter($__internal_7e7b355a9c29ed69096f00280bb438a93bb2f24fcfec2faf16b2c296645947b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e7b355a9c29ed69096f00280bb438a93bb2f24fcfec2faf16b2c296645947b7->leave($__internal_7e7b355a9c29ed69096f00280bb438a93bb2f24fcfec2faf16b2c296645947b7_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_4372773cb8a8ff889b87ad6747fa1e611f7fd89ac541da10c4db52a5fe1082d5 = $this->env->getExtension("native_profiler");
        $__internal_4372773cb8a8ff889b87ad6747fa1e611f7fd89ac541da10c4db52a5fe1082d5->enter($__internal_4372773cb8a8ff889b87ad6747fa1e611f7fd89ac541da10c4db52a5fe1082d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un retour d'activation</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig");
        echo "

  <p>
    Ce retour d'activation sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_4372773cb8a8ff889b87ad6747fa1e611f7fd89ac541da10c4db52a5fe1082d5->leave($__internal_4372773cb8a8ff889b87ad6747fa1e611f7fd89ac541da10c4db52a5fe1082d5_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeRetourActivation/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un retour d'activation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce retour d'activation sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
