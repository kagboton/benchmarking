<?php

/* @Benchmarking/Default/FonctionExistante/edit.html.twig */
class __TwigTemplate_b9c784236f5b07e10865d50760b0dd2023d617b3ed737a704f18ae0e46305829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/FonctionExistante/edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e14b47742aa0899fcd50e307969e65344e7cd245ffadaae960b064585473fa9 = $this->env->getExtension("native_profiler");
        $__internal_9e14b47742aa0899fcd50e307969e65344e7cd245ffadaae960b064585473fa9->enter($__internal_9e14b47742aa0899fcd50e307969e65344e7cd245ffadaae960b064585473fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e14b47742aa0899fcd50e307969e65344e7cd245ffadaae960b064585473fa9->leave($__internal_9e14b47742aa0899fcd50e307969e65344e7cd245ffadaae960b064585473fa9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b04d69c3c66de61c5ba8de40b7a4cfdaf44400f111c915643bb11985faba5093 = $this->env->getExtension("native_profiler");
        $__internal_b04d69c3c66de61c5ba8de40b7a4cfdaf44400f111c915643bb11985faba5093->enter($__internal_b04d69c3c66de61c5ba8de40b7a4cfdaf44400f111c915643bb11985faba5093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b04d69c3c66de61c5ba8de40b7a4cfdaf44400f111c915643bb11985faba5093->leave($__internal_b04d69c3c66de61c5ba8de40b7a4cfdaf44400f111c915643bb11985faba5093_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_8c3a7471ed6a8d29468e305fafda36e33f66a9a9e2b7685093308912ee71340b = $this->env->getExtension("native_profiler");
        $__internal_8c3a7471ed6a8d29468e305fafda36e33f66a9a9e2b7685093308912ee71340b->enter($__internal_8c3a7471ed6a8d29468e305fafda36e33f66a9a9e2b7685093308912ee71340b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une fonction</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FonctionExistante/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_view", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la fonction
      </a>
    </p>
  </div>


";
        
        $__internal_8c3a7471ed6a8d29468e305fafda36e33f66a9a9e2b7685093308912ee71340b->leave($__internal_8c3a7471ed6a8d29468e305fafda36e33f66a9a9e2b7685093308912ee71340b_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FonctionExistante/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 16,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FonctionExistante/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une fonction</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:FonctionExistante/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('fonction_view', {'id': fonction.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la fonction*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
