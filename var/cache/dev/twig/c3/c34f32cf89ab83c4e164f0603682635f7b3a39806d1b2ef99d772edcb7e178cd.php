<?php

/* BenchmarkingBundle:Default/TypeTdB:add.html.twig */
class __TwigTemplate_29bccfc38173195020411642c1820a56b2dd9d019fd0a1a660405719c83b9f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeTdB:add.html.twig", 3);
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
        $__internal_6dff040f5e26e6f7c8c53c5367b45c183f4d68625d9ce1a35cb4e7279a3b4c01 = $this->env->getExtension("native_profiler");
        $__internal_6dff040f5e26e6f7c8c53c5367b45c183f4d68625d9ce1a35cb4e7279a3b4c01->enter($__internal_6dff040f5e26e6f7c8c53c5367b45c183f4d68625d9ce1a35cb4e7279a3b4c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dff040f5e26e6f7c8c53c5367b45c183f4d68625d9ce1a35cb4e7279a3b4c01->leave($__internal_6dff040f5e26e6f7c8c53c5367b45c183f4d68625d9ce1a35cb4e7279a3b4c01_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0712fa0020fb1b3bc5f2d4ab972cbf76ab95220fff56024f53a4f29e658d012d = $this->env->getExtension("native_profiler");
        $__internal_0712fa0020fb1b3bc5f2d4ab972cbf76ab95220fff56024f53a4f29e658d012d->enter($__internal_0712fa0020fb1b3bc5f2d4ab972cbf76ab95220fff56024f53a4f29e658d012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0712fa0020fb1b3bc5f2d4ab972cbf76ab95220fff56024f53a4f29e658d012d->leave($__internal_0712fa0020fb1b3bc5f2d4ab972cbf76ab95220fff56024f53a4f29e658d012d_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_6ff5ceaeea246edc0bcca369a36994efc826d5792dcc396141998a86d4ea4c2a = $this->env->getExtension("native_profiler");
        $__internal_6ff5ceaeea246edc0bcca369a36994efc826d5792dcc396141998a86d4ea4c2a->enter($__internal_6ff5ceaeea246edc0bcca369a36994efc826d5792dcc396141998a86d4ea4c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un type de tableau de bord</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeTdB/form.html.twig");
        echo "

  <p>
    Ce type de tableau de bord sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_6ff5ceaeea246edc0bcca369a36994efc826d5792dcc396141998a86d4ea4c2a->leave($__internal_6ff5ceaeea246edc0bcca369a36994efc826d5792dcc396141998a86d4ea4c2a_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeTdB:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeTdB/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un type de tableau de bord - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un type de tableau de bord</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeTdB/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce type de tableau de bord sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
