<?php

/* BenchmarkingBundle:Default/FormatEcran:edit.html.twig */
class __TwigTemplate_4014967e9031f32ac7d9bdcf3bc42fa5eda3ed1054ebbc280724e7334e1af9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/FormatEcran:edit.html.twig", 3);
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
        $__internal_382d84e71743d417354c9a1ee66a1399cdc57f73fcaadc67ea7a7b212b6350e9 = $this->env->getExtension("native_profiler");
        $__internal_382d84e71743d417354c9a1ee66a1399cdc57f73fcaadc67ea7a7b212b6350e9->enter($__internal_382d84e71743d417354c9a1ee66a1399cdc57f73fcaadc67ea7a7b212b6350e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FormatEcran:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382d84e71743d417354c9a1ee66a1399cdc57f73fcaadc67ea7a7b212b6350e9->leave($__internal_382d84e71743d417354c9a1ee66a1399cdc57f73fcaadc67ea7a7b212b6350e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f255dc06b4a771cbaa6345b44a445a99c27674d4815d6145d5b66a1c18b65dd0 = $this->env->getExtension("native_profiler");
        $__internal_f255dc06b4a771cbaa6345b44a445a99c27674d4815d6145d5b66a1c18b65dd0->enter($__internal_f255dc06b4a771cbaa6345b44a445a99c27674d4815d6145d5b66a1c18b65dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un Format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f255dc06b4a771cbaa6345b44a445a99c27674d4815d6145d5b66a1c18b65dd0->leave($__internal_f255dc06b4a771cbaa6345b44a445a99c27674d4815d6145d5b66a1c18b65dd0_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_72452cb6364f885f457cb755fdd97416dd3f4c9e49c074e095c556a9ecc87b8b = $this->env->getExtension("native_profiler");
        $__internal_72452cb6364f885f457cb755fdd97416dd3f4c9e49c074e095c556a9ecc87b8b->enter($__internal_72452cb6364f885f457cb755fdd97416dd3f4c9e49c074e095c556a9ecc87b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un Format d'écran</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FormatEcran/form.html.twig");
        echo "

  <p>
    Modification d'un Format d'écran déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formatEcran_view", array("id" => $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au Format d'écran
    </a>
  </p>

";
        
        $__internal_72452cb6364f885f457cb755fdd97416dd3f4c9e49c074e095c556a9ecc87b8b->leave($__internal_72452cb6364f885f457cb755fdd97416dd3f4c9e49c074e095c556a9ecc87b8b_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FormatEcran:edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/FormatEcran/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un Format d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un Format d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:FormatEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un Format d'écran déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('formatEcran_view', {'id': formatEcran.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au Format d'écran*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
