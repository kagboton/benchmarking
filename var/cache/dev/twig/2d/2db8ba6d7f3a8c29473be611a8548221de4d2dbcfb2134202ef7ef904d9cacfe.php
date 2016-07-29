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
        $__internal_4c4984029c833f1cc34421ead58adb87df9f452bb6188af10eaecc8183103d9a = $this->env->getExtension("native_profiler");
        $__internal_4c4984029c833f1cc34421ead58adb87df9f452bb6188af10eaecc8183103d9a->enter($__internal_4c4984029c833f1cc34421ead58adb87df9f452bb6188af10eaecc8183103d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c4984029c833f1cc34421ead58adb87df9f452bb6188af10eaecc8183103d9a->leave($__internal_4c4984029c833f1cc34421ead58adb87df9f452bb6188af10eaecc8183103d9a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bd65da560d05fef35c8053e4915bfd54c8e9afbe44e87432391660c0a508a05 = $this->env->getExtension("native_profiler");
        $__internal_2bd65da560d05fef35c8053e4915bfd54c8e9afbe44e87432391660c0a508a05->enter($__internal_2bd65da560d05fef35c8053e4915bfd54c8e9afbe44e87432391660c0a508a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2bd65da560d05fef35c8053e4915bfd54c8e9afbe44e87432391660c0a508a05->leave($__internal_2bd65da560d05fef35c8053e4915bfd54c8e9afbe44e87432391660c0a508a05_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_ab6fb23b9498f282d3278f3163afa28a067187b623f7e373f9ab2d2f52f4cc95 = $this->env->getExtension("native_profiler");
        $__internal_ab6fb23b9498f282d3278f3163afa28a067187b623f7e373f9ab2d2f52f4cc95->enter($__internal_ab6fb23b9498f282d3278f3163afa28a067187b623f7e373f9ab2d2f52f4cc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_ab6fb23b9498f282d3278f3163afa28a067187b623f7e373f9ab2d2f52f4cc95->leave($__internal_ab6fb23b9498f282d3278f3163afa28a067187b623f7e373f9ab2d2f52f4cc95_prof);

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
