<?php

/* @Benchmarking/Default/FormatEcran/edit.html.twig */
class __TwigTemplate_1d5bdc7ff067e15016e92feb374031667658562b53466253ed4d425193231bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/FormatEcran/edit.html.twig", 3);
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
        $__internal_de0949b02f74c00e674911bf56f0ed00c406e30ec18cbbe3cd10b4672b0793f3 = $this->env->getExtension("native_profiler");
        $__internal_de0949b02f74c00e674911bf56f0ed00c406e30ec18cbbe3cd10b4672b0793f3->enter($__internal_de0949b02f74c00e674911bf56f0ed00c406e30ec18cbbe3cd10b4672b0793f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0949b02f74c00e674911bf56f0ed00c406e30ec18cbbe3cd10b4672b0793f3->leave($__internal_de0949b02f74c00e674911bf56f0ed00c406e30ec18cbbe3cd10b4672b0793f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32fd5ff385913cddf315bdb9b014fd73be764a76cd0c6245577d3cfba8de421c = $this->env->getExtension("native_profiler");
        $__internal_32fd5ff385913cddf315bdb9b014fd73be764a76cd0c6245577d3cfba8de421c->enter($__internal_32fd5ff385913cddf315bdb9b014fd73be764a76cd0c6245577d3cfba8de421c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un Format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_32fd5ff385913cddf315bdb9b014fd73be764a76cd0c6245577d3cfba8de421c->leave($__internal_32fd5ff385913cddf315bdb9b014fd73be764a76cd0c6245577d3cfba8de421c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_37e87720af2af6a3ffc968c2b069bfe804c29c8d5e401ffc284fae858b2b4cce = $this->env->getExtension("native_profiler");
        $__internal_37e87720af2af6a3ffc968c2b069bfe804c29c8d5e401ffc284fae858b2b4cce->enter($__internal_37e87720af2af6a3ffc968c2b069bfe804c29c8d5e401ffc284fae858b2b4cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_37e87720af2af6a3ffc968c2b069bfe804c29c8d5e401ffc284fae858b2b4cce->leave($__internal_37e87720af2af6a3ffc968c2b069bfe804c29c8d5e401ffc284fae858b2b4cce_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/edit.html.twig";
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
