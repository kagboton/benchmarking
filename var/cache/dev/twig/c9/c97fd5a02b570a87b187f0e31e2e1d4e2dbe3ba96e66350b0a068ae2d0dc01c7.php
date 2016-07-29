<?php

/* @Benchmarking/Default/Localisation/add.html.twig */
class __TwigTemplate_77214baffacea3fa1e990cf1c6321be7e1ddccaf981284a7fde52efb94c3ad22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Localisation/add.html.twig", 3);
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
        $__internal_41fb3195d7e829e672d6c2f9b8726b14320f1960fe0f22cd886d2ed2dbb74f6c = $this->env->getExtension("native_profiler");
        $__internal_41fb3195d7e829e672d6c2f9b8726b14320f1960fe0f22cd886d2ed2dbb74f6c->enter($__internal_41fb3195d7e829e672d6c2f9b8726b14320f1960fe0f22cd886d2ed2dbb74f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Localisation/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41fb3195d7e829e672d6c2f9b8726b14320f1960fe0f22cd886d2ed2dbb74f6c->leave($__internal_41fb3195d7e829e672d6c2f9b8726b14320f1960fe0f22cd886d2ed2dbb74f6c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4f1b081aa212b77d03760e85ca759b1f5798dcc1b27ddb39943b6f7612f1526 = $this->env->getExtension("native_profiler");
        $__internal_a4f1b081aa212b77d03760e85ca759b1f5798dcc1b27ddb39943b6f7612f1526->enter($__internal_a4f1b081aa212b77d03760e85ca759b1f5798dcc1b27ddb39943b6f7612f1526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4f1b081aa212b77d03760e85ca759b1f5798dcc1b27ddb39943b6f7612f1526->leave($__internal_a4f1b081aa212b77d03760e85ca759b1f5798dcc1b27ddb39943b6f7612f1526_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_84b045f48ab965c7e2c34edb161fdfc4f76293ff8964998cd50738e958579a89 = $this->env->getExtension("native_profiler");
        $__internal_84b045f48ab965c7e2c34edb161fdfc4f76293ff8964998cd50738e958579a89->enter($__internal_84b045f48ab965c7e2c34edb161fdfc4f76293ff8964998cd50738e958579a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une localisation</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Localisation/form.html.twig");
        echo "

  <p>
    Cette localisation sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_84b045f48ab965c7e2c34edb161fdfc4f76293ff8964998cd50738e958579a89->leave($__internal_84b045f48ab965c7e2c34edb161fdfc4f76293ff8964998cd50738e958579a89_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Localisation/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Localisation/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une localisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une localisation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:Localisation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette localisation sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
