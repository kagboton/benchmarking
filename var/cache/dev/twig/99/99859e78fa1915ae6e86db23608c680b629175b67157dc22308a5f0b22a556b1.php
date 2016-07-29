<?php

/* @Benchmarking/Default/TypeTdB/add.html.twig */
class __TwigTemplate_6144161cc822b32cd7aef88c2c73ce920ad8680c4d4f898f38efc03d36d3fede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeTdB/add.html.twig", 3);
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
        $__internal_4ad584592b9c016e6385b0d86d94ddef35159370d9316457e91e8fe676803ba2 = $this->env->getExtension("native_profiler");
        $__internal_4ad584592b9c016e6385b0d86d94ddef35159370d9316457e91e8fe676803ba2->enter($__internal_4ad584592b9c016e6385b0d86d94ddef35159370d9316457e91e8fe676803ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeTdB/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad584592b9c016e6385b0d86d94ddef35159370d9316457e91e8fe676803ba2->leave($__internal_4ad584592b9c016e6385b0d86d94ddef35159370d9316457e91e8fe676803ba2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_54755a159d256df346ca2cbe5ac092c7a35ef9986aeeb016b6f26de497964051 = $this->env->getExtension("native_profiler");
        $__internal_54755a159d256df346ca2cbe5ac092c7a35ef9986aeeb016b6f26de497964051->enter($__internal_54755a159d256df346ca2cbe5ac092c7a35ef9986aeeb016b6f26de497964051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_54755a159d256df346ca2cbe5ac092c7a35ef9986aeeb016b6f26de497964051->leave($__internal_54755a159d256df346ca2cbe5ac092c7a35ef9986aeeb016b6f26de497964051_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_7cafcb447bf63c91b218761051ae1f9115e96b872877569234616d54493d7e18 = $this->env->getExtension("native_profiler");
        $__internal_7cafcb447bf63c91b218761051ae1f9115e96b872877569234616d54493d7e18->enter($__internal_7cafcb447bf63c91b218761051ae1f9115e96b872877569234616d54493d7e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_7cafcb447bf63c91b218761051ae1f9115e96b872877569234616d54493d7e18->leave($__internal_7cafcb447bf63c91b218761051ae1f9115e96b872877569234616d54493d7e18_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeTdB/add.html.twig";
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
