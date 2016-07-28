<?php

/* BenchmarkingBundle:Default/Localisation:edit.html.twig */
class __TwigTemplate_1136df8bc8df52f4f9ae5a90a933416899a9dac157c5c49b38da562e93279268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/Localisation:edit.html.twig", 3);
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
        $__internal_cc0e3a63b5c2a15be3f59b1d7eca81a483eab9fac85248e05a19380ead7f7c00 = $this->env->getExtension("native_profiler");
        $__internal_cc0e3a63b5c2a15be3f59b1d7eca81a483eab9fac85248e05a19380ead7f7c00->enter($__internal_cc0e3a63b5c2a15be3f59b1d7eca81a483eab9fac85248e05a19380ead7f7c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Localisation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0e3a63b5c2a15be3f59b1d7eca81a483eab9fac85248e05a19380ead7f7c00->leave($__internal_cc0e3a63b5c2a15be3f59b1d7eca81a483eab9fac85248e05a19380ead7f7c00_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73858d57558657fb87a9229bd5943fee2d10c8fe354e6fb78d527f70f611729e = $this->env->getExtension("native_profiler");
        $__internal_73858d57558657fb87a9229bd5943fee2d10c8fe354e6fb78d527f70f611729e->enter($__internal_73858d57558657fb87a9229bd5943fee2d10c8fe354e6fb78d527f70f611729e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_73858d57558657fb87a9229bd5943fee2d10c8fe354e6fb78d527f70f611729e->leave($__internal_73858d57558657fb87a9229bd5943fee2d10c8fe354e6fb78d527f70f611729e_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_800655bfef0fb07241e97b54cd559bfa91e8eb92756149f2c0f3580ae23218e7 = $this->env->getExtension("native_profiler");
        $__internal_800655bfef0fb07241e97b54cd559bfa91e8eb92756149f2c0f3580ae23218e7->enter($__internal_800655bfef0fb07241e97b54cd559bfa91e8eb92756149f2c0f3580ae23218e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une localisation</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Localisation/form.html.twig");
        echo "

  <p>
    Modification d'une localisation déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_view", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la localisation
    </a>
  </p>

";
        
        $__internal_800655bfef0fb07241e97b54cd559bfa91e8eb92756149f2c0f3580ae23218e7->leave($__internal_800655bfef0fb07241e97b54cd559bfa91e8eb92756149f2c0f3580ae23218e7_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Localisation:edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Localisation/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une localisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une localisation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:Localisation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une localisation déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('localisation_view', {'id': localisation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la localisation*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
