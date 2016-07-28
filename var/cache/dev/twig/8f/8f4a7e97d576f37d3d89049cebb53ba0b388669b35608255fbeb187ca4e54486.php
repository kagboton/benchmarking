<?php

/* @Benchmarking/Default/FormatEcran/add.html.twig */
class __TwigTemplate_8e68d3f3e579584f3b980f64fd734feb124060d6251c3cbcfa42b6d86be23e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/FormatEcran/add.html.twig", 3);
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
        $__internal_d2b6a906f047ac48dc2b590020bdc09d035e3c6958d8fc84e9eaa1c4a4cff046 = $this->env->getExtension("native_profiler");
        $__internal_d2b6a906f047ac48dc2b590020bdc09d035e3c6958d8fc84e9eaa1c4a4cff046->enter($__internal_d2b6a906f047ac48dc2b590020bdc09d035e3c6958d8fc84e9eaa1c4a4cff046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b6a906f047ac48dc2b590020bdc09d035e3c6958d8fc84e9eaa1c4a4cff046->leave($__internal_d2b6a906f047ac48dc2b590020bdc09d035e3c6958d8fc84e9eaa1c4a4cff046_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_088e76a687b86e31e1ba68c43839409d7edf9879a6e8d5ac57c7cfefbdccaaa0 = $this->env->getExtension("native_profiler");
        $__internal_088e76a687b86e31e1ba68c43839409d7edf9879a6e8d5ac57c7cfefbdccaaa0->enter($__internal_088e76a687b86e31e1ba68c43839409d7edf9879a6e8d5ac57c7cfefbdccaaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_088e76a687b86e31e1ba68c43839409d7edf9879a6e8d5ac57c7cfefbdccaaa0->leave($__internal_088e76a687b86e31e1ba68c43839409d7edf9879a6e8d5ac57c7cfefbdccaaa0_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_67592a559b019fad36a28b321e7fda290e316150e7362268cb85fbd710208e56 = $this->env->getExtension("native_profiler");
        $__internal_67592a559b019fad36a28b321e7fda290e316150e7362268cb85fbd710208e56->enter($__internal_67592a559b019fad36a28b321e7fda290e316150e7362268cb85fbd710208e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_67592a559b019fad36a28b321e7fda290e316150e7362268cb85fbd710208e56->leave($__internal_67592a559b019fad36a28b321e7fda290e316150e7362268cb85fbd710208e56_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/add.html.twig";
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
