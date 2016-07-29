<?php

/* BenchmarkingBundle:Default/TypeTdB:edit.html.twig */
class __TwigTemplate_02bee953068ebe4d3bc49cd42e7a5c9e1e3a7fc7dd7bbde735e37dc4a4e5b741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeTdB:edit.html.twig", 3);
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
        $__internal_b9863ee5cc25a3795c63ce7255c38f3641c72e46b76641bf25ab125ec6518f7f = $this->env->getExtension("native_profiler");
        $__internal_b9863ee5cc25a3795c63ce7255c38f3641c72e46b76641bf25ab125ec6518f7f->enter($__internal_b9863ee5cc25a3795c63ce7255c38f3641c72e46b76641bf25ab125ec6518f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9863ee5cc25a3795c63ce7255c38f3641c72e46b76641bf25ab125ec6518f7f->leave($__internal_b9863ee5cc25a3795c63ce7255c38f3641c72e46b76641bf25ab125ec6518f7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d73d34a84e8e7e11e17863011ec6b078ec4b9a007746f9610283dd3e6fc6633 = $this->env->getExtension("native_profiler");
        $__internal_7d73d34a84e8e7e11e17863011ec6b078ec4b9a007746f9610283dd3e6fc6633->enter($__internal_7d73d34a84e8e7e11e17863011ec6b078ec4b9a007746f9610283dd3e6fc6633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7d73d34a84e8e7e11e17863011ec6b078ec4b9a007746f9610283dd3e6fc6633->leave($__internal_7d73d34a84e8e7e11e17863011ec6b078ec4b9a007746f9610283dd3e6fc6633_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_7b07db858d44d62e2c8a5ffbd73eb141fb856e82c772b1e84440288ee545a777 = $this->env->getExtension("native_profiler");
        $__internal_7b07db858d44d62e2c8a5ffbd73eb141fb856e82c772b1e84440288ee545a777->enter($__internal_7b07db858d44d62e2c8a5ffbd73eb141fb856e82c772b1e84440288ee545a777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un type de tableau de bord</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeTdB/form.html.twig");
        echo "

  <p>
    Modification d'un type de tableau de bord déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_view", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au type de tableau de bord
    </a>
  </p>

";
        
        $__internal_7b07db858d44d62e2c8a5ffbd73eb141fb856e82c772b1e84440288ee545a777->leave($__internal_7b07db858d44d62e2c8a5ffbd73eb141fb856e82c772b1e84440288ee545a777_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeTdB:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeTdB/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un type de tableau de bord - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un type de tableau de bord</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeTdB/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un type de tableau de bord déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('typeTdB_view', {'id': typeTdB.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au type de tableau de bord*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
