<?php

/* @Benchmarking/Default/TypeRetourActivation/add.html.twig */
class __TwigTemplate_df42f3c182d4e6471ce52a7d5f26c23042a27207ecb6f2dc590930b4f7ceacf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeRetourActivation/add.html.twig", 3);
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
        $__internal_ef1e36e37ccd71eacf78069cd3aec55f6385021ef5e686fcffd9640445c3e74a = $this->env->getExtension("native_profiler");
        $__internal_ef1e36e37ccd71eacf78069cd3aec55f6385021ef5e686fcffd9640445c3e74a->enter($__internal_ef1e36e37ccd71eacf78069cd3aec55f6385021ef5e686fcffd9640445c3e74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1e36e37ccd71eacf78069cd3aec55f6385021ef5e686fcffd9640445c3e74a->leave($__internal_ef1e36e37ccd71eacf78069cd3aec55f6385021ef5e686fcffd9640445c3e74a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cfbf631fc2742010d85581b0b37ff11b35ed6de48b5a25cd17f0bf6dd86cfa1 = $this->env->getExtension("native_profiler");
        $__internal_6cfbf631fc2742010d85581b0b37ff11b35ed6de48b5a25cd17f0bf6dd86cfa1->enter($__internal_6cfbf631fc2742010d85581b0b37ff11b35ed6de48b5a25cd17f0bf6dd86cfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6cfbf631fc2742010d85581b0b37ff11b35ed6de48b5a25cd17f0bf6dd86cfa1->leave($__internal_6cfbf631fc2742010d85581b0b37ff11b35ed6de48b5a25cd17f0bf6dd86cfa1_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_dd3659b072aaa4e06fcbe67cfaf4e05d30a0223389904875bc13956f29b81207 = $this->env->getExtension("native_profiler");
        $__internal_dd3659b072aaa4e06fcbe67cfaf4e05d30a0223389904875bc13956f29b81207->enter($__internal_dd3659b072aaa4e06fcbe67cfaf4e05d30a0223389904875bc13956f29b81207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un retour d'activation</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig");
        echo "

  <p>
    Ce retour d'activation sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_dd3659b072aaa4e06fcbe67cfaf4e05d30a0223389904875bc13956f29b81207->leave($__internal_dd3659b072aaa4e06fcbe67cfaf4e05d30a0223389904875bc13956f29b81207_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeRetourActivation/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un retour d'activation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce retour d'activation sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
