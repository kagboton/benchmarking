<?php

/* BenchmarkingBundle:Default/TailleEcran:edit.html.twig */
class __TwigTemplate_1ebc97b232a2d87d0a4231774fdc465960a1c29a3d9fb003f6b914b78bfba41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TailleEcran:edit.html.twig", 3);
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
        $__internal_ce1ec4766d7154891f0d9c70a404d17ae364fb22448b18443eb59dba1e5d0e97 = $this->env->getExtension("native_profiler");
        $__internal_ce1ec4766d7154891f0d9c70a404d17ae364fb22448b18443eb59dba1e5d0e97->enter($__internal_ce1ec4766d7154891f0d9c70a404d17ae364fb22448b18443eb59dba1e5d0e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TailleEcran:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce1ec4766d7154891f0d9c70a404d17ae364fb22448b18443eb59dba1e5d0e97->leave($__internal_ce1ec4766d7154891f0d9c70a404d17ae364fb22448b18443eb59dba1e5d0e97_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a64bce37abf9194729e4e95d593fc472884371c69f8e963d443e73f69db342d = $this->env->getExtension("native_profiler");
        $__internal_2a64bce37abf9194729e4e95d593fc472884371c69f8e963d443e73f69db342d->enter($__internal_2a64bce37abf9194729e4e95d593fc472884371c69f8e963d443e73f69db342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a64bce37abf9194729e4e95d593fc472884371c69f8e963d443e73f69db342d->leave($__internal_2a64bce37abf9194729e4e95d593fc472884371c69f8e963d443e73f69db342d_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_31dd96951d11dfc711a152fe32d44493759316ca66a2bb47881d84c44098cd0c = $this->env->getExtension("native_profiler");
        $__internal_31dd96951d11dfc711a152fe32d44493759316ca66a2bb47881d84c44098cd0c->enter($__internal_31dd96951d11dfc711a152fe32d44493759316ca66a2bb47881d84c44098cd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une taille d'écran</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TailleEcran/form.html.twig");
        echo "

  <p>
    Modification d'une taille d'écran déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_view", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la taille d'écran
    </a>
  </p>

";
        
        $__internal_31dd96951d11dfc711a152fe32d44493759316ca66a2bb47881d84c44098cd0c->leave($__internal_31dd96951d11dfc711a152fe32d44493759316ca66a2bb47881d84c44098cd0c_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TailleEcran:edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TailleEcran/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une taille d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une taille d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TailleEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une taille d'écran déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('tailleEcran_view', {'id': tailleEcran.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la taille d'écran*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
