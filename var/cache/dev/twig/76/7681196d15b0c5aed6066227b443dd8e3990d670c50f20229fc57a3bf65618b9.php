<?php

/* BenchmarkingBundle:Default/FormatEcran:add.html.twig */
class __TwigTemplate_eaecd75e1b0a81dd384f590719522bba97f2eec605e4566cb79ac56557799881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/FormatEcran:add.html.twig", 3);
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
        $__internal_7fe974da45ed1176d3a0f517531c68536b4359630e6b6db352f545d8d5bb676b = $this->env->getExtension("native_profiler");
        $__internal_7fe974da45ed1176d3a0f517531c68536b4359630e6b6db352f545d8d5bb676b->enter($__internal_7fe974da45ed1176d3a0f517531c68536b4359630e6b6db352f545d8d5bb676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FormatEcran:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe974da45ed1176d3a0f517531c68536b4359630e6b6db352f545d8d5bb676b->leave($__internal_7fe974da45ed1176d3a0f517531c68536b4359630e6b6db352f545d8d5bb676b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b7686320432b67c93f4c581ca7133d1ebdbb18b8a42d784670a1cdbefae7b08 = $this->env->getExtension("native_profiler");
        $__internal_0b7686320432b67c93f4c581ca7133d1ebdbb18b8a42d784670a1cdbefae7b08->enter($__internal_0b7686320432b67c93f4c581ca7133d1ebdbb18b8a42d784670a1cdbefae7b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0b7686320432b67c93f4c581ca7133d1ebdbb18b8a42d784670a1cdbefae7b08->leave($__internal_0b7686320432b67c93f4c581ca7133d1ebdbb18b8a42d784670a1cdbefae7b08_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5aa2cab39b715f9e0bdb46bf7d16728a85babab62604ec6e47664742f52d23bd = $this->env->getExtension("native_profiler");
        $__internal_5aa2cab39b715f9e0bdb46bf7d16728a85babab62604ec6e47664742f52d23bd->enter($__internal_5aa2cab39b715f9e0bdb46bf7d16728a85babab62604ec6e47664742f52d23bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un format d'écran</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FormatEcran/form.html.twig");
        echo "

  <p>
    Ce format d'écran sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_5aa2cab39b715f9e0bdb46bf7d16728a85babab62604ec6e47664742f52d23bd->leave($__internal_5aa2cab39b715f9e0bdb46bf7d16728a85babab62604ec6e47664742f52d23bd_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FormatEcran:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/FormatEcran/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un format d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un format d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:FormatEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce format d'écran sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
