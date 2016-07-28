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
        $__internal_12b8b809689a76ffb05b001d0a380cc1bbe31c5f0cee561649a4945aa565a7f5 = $this->env->getExtension("native_profiler");
        $__internal_12b8b809689a76ffb05b001d0a380cc1bbe31c5f0cee561649a4945aa565a7f5->enter($__internal_12b8b809689a76ffb05b001d0a380cc1bbe31c5f0cee561649a4945aa565a7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Localisation/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b8b809689a76ffb05b001d0a380cc1bbe31c5f0cee561649a4945aa565a7f5->leave($__internal_12b8b809689a76ffb05b001d0a380cc1bbe31c5f0cee561649a4945aa565a7f5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2041505bc43ab7e2b2839f5b34c83d38a5a74fc7e56764786da6b08edc5ec9aa = $this->env->getExtension("native_profiler");
        $__internal_2041505bc43ab7e2b2839f5b34c83d38a5a74fc7e56764786da6b08edc5ec9aa->enter($__internal_2041505bc43ab7e2b2839f5b34c83d38a5a74fc7e56764786da6b08edc5ec9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2041505bc43ab7e2b2839f5b34c83d38a5a74fc7e56764786da6b08edc5ec9aa->leave($__internal_2041505bc43ab7e2b2839f5b34c83d38a5a74fc7e56764786da6b08edc5ec9aa_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_aa3b97c0240ed97527e20d277eebbec70906648169a08157ff234903035f8a3c = $this->env->getExtension("native_profiler");
        $__internal_aa3b97c0240ed97527e20d277eebbec70906648169a08157ff234903035f8a3c->enter($__internal_aa3b97c0240ed97527e20d277eebbec70906648169a08157ff234903035f8a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_aa3b97c0240ed97527e20d277eebbec70906648169a08157ff234903035f8a3c->leave($__internal_aa3b97c0240ed97527e20d277eebbec70906648169a08157ff234903035f8a3c_prof);

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
