<?php

/* @Benchmarking/Default/Localisation/edit.html.twig */
class __TwigTemplate_0f6feb431c167e53f0956e5e0fb412fdb4e5e3649892c21bbed7bbd15f557824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Localisation/edit.html.twig", 3);
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
        $__internal_c4c865c1c699f5fbf6d8a1d6186f64481fa69cf9930c87dba48b11e877d9a6a8 = $this->env->getExtension("native_profiler");
        $__internal_c4c865c1c699f5fbf6d8a1d6186f64481fa69cf9930c87dba48b11e877d9a6a8->enter($__internal_c4c865c1c699f5fbf6d8a1d6186f64481fa69cf9930c87dba48b11e877d9a6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Localisation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c865c1c699f5fbf6d8a1d6186f64481fa69cf9930c87dba48b11e877d9a6a8->leave($__internal_c4c865c1c699f5fbf6d8a1d6186f64481fa69cf9930c87dba48b11e877d9a6a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a939f91fd175ea507b1f79ec6c7a12003727c537946d151ae4d37f2cae1773ea = $this->env->getExtension("native_profiler");
        $__internal_a939f91fd175ea507b1f79ec6c7a12003727c537946d151ae4d37f2cae1773ea->enter($__internal_a939f91fd175ea507b1f79ec6c7a12003727c537946d151ae4d37f2cae1773ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a939f91fd175ea507b1f79ec6c7a12003727c537946d151ae4d37f2cae1773ea->leave($__internal_a939f91fd175ea507b1f79ec6c7a12003727c537946d151ae4d37f2cae1773ea_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_f428d7bcd8895aaa260757a341ab6ed5a5b9f0c9165571a6935136df23239838 = $this->env->getExtension("native_profiler");
        $__internal_f428d7bcd8895aaa260757a341ab6ed5a5b9f0c9165571a6935136df23239838->enter($__internal_f428d7bcd8895aaa260757a341ab6ed5a5b9f0c9165571a6935136df23239838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_f428d7bcd8895aaa260757a341ab6ed5a5b9f0c9165571a6935136df23239838->leave($__internal_f428d7bcd8895aaa260757a341ab6ed5a5b9f0c9165571a6935136df23239838_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Localisation/edit.html.twig";
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
