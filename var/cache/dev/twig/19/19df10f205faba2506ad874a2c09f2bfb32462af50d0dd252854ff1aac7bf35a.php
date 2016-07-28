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
        $__internal_2ecb13413d5c148baef56a1f08c6ec61889c8fa1aba2d1df584b39e5e4dcaab0 = $this->env->getExtension("native_profiler");
        $__internal_2ecb13413d5c148baef56a1f08c6ec61889c8fa1aba2d1df584b39e5e4dcaab0->enter($__internal_2ecb13413d5c148baef56a1f08c6ec61889c8fa1aba2d1df584b39e5e4dcaab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecb13413d5c148baef56a1f08c6ec61889c8fa1aba2d1df584b39e5e4dcaab0->leave($__internal_2ecb13413d5c148baef56a1f08c6ec61889c8fa1aba2d1df584b39e5e4dcaab0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_449e961ba7e5693c8d0e0cb189e8328765316f739d2681683b0afc36fbc7ae7c = $this->env->getExtension("native_profiler");
        $__internal_449e961ba7e5693c8d0e0cb189e8328765316f739d2681683b0afc36fbc7ae7c->enter($__internal_449e961ba7e5693c8d0e0cb189e8328765316f739d2681683b0afc36fbc7ae7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_449e961ba7e5693c8d0e0cb189e8328765316f739d2681683b0afc36fbc7ae7c->leave($__internal_449e961ba7e5693c8d0e0cb189e8328765316f739d2681683b0afc36fbc7ae7c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_f627ae857559c51d9c05c7ea3b994a8ab1b069703f3c0bcb01b1fdb543e7541b = $this->env->getExtension("native_profiler");
        $__internal_f627ae857559c51d9c05c7ea3b994a8ab1b069703f3c0bcb01b1fdb543e7541b->enter($__internal_f627ae857559c51d9c05c7ea3b994a8ab1b069703f3c0bcb01b1fdb543e7541b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_f627ae857559c51d9c05c7ea3b994a8ab1b069703f3c0bcb01b1fdb543e7541b->leave($__internal_f627ae857559c51d9c05c7ea3b994a8ab1b069703f3c0bcb01b1fdb543e7541b_prof);

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
