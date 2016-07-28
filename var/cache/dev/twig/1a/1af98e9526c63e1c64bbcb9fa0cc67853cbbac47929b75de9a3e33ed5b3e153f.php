<?php

/* @Benchmarking/Default/AfficheurExistant/add.html.twig */
class __TwigTemplate_3755c13bebfb6a316bda96be6d1257d41476698e5f5f670438021edbde20e86e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/AfficheurExistant/add.html.twig", 3);
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
        $__internal_9f1dfc7a0f8d476463f26d8087a7b960e4cdef6fe3cf1a17fc3064df06481074 = $this->env->getExtension("native_profiler");
        $__internal_9f1dfc7a0f8d476463f26d8087a7b960e4cdef6fe3cf1a17fc3064df06481074->enter($__internal_9f1dfc7a0f8d476463f26d8087a7b960e4cdef6fe3cf1a17fc3064df06481074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/AfficheurExistant/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f1dfc7a0f8d476463f26d8087a7b960e4cdef6fe3cf1a17fc3064df06481074->leave($__internal_9f1dfc7a0f8d476463f26d8087a7b960e4cdef6fe3cf1a17fc3064df06481074_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e9ba11c6bc26a3578f366b0271a195eaf65a50084e1201c526b7688e771cf60 = $this->env->getExtension("native_profiler");
        $__internal_3e9ba11c6bc26a3578f366b0271a195eaf65a50084e1201c526b7688e771cf60->enter($__internal_3e9ba11c6bc26a3578f366b0271a195eaf65a50084e1201c526b7688e771cf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un afficheur  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3e9ba11c6bc26a3578f366b0271a195eaf65a50084e1201c526b7688e771cf60->leave($__internal_3e9ba11c6bc26a3578f366b0271a195eaf65a50084e1201c526b7688e771cf60_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_96b5a365255af6908d0cca696bc79a421b631a8b835bdc0da719314d186b172e = $this->env->getExtension("native_profiler");
        $__internal_96b5a365255af6908d0cca696bc79a421b631a8b835bdc0da719314d186b172e->enter($__internal_96b5a365255af6908d0cca696bc79a421b631a8b835bdc0da719314d186b172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un affficheur</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:AfficheurExistant/form.html.twig");
        echo "

  <p>
    Cet afficheur sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_96b5a365255af6908d0cca696bc79a421b631a8b835bdc0da719314d186b172e->leave($__internal_96b5a365255af6908d0cca696bc79a421b631a8b835bdc0da719314d186b172e_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/AfficheurExistant/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/AfficheurExistant/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un afficheur  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un affficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:AfficheurExistant/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cet afficheur sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
