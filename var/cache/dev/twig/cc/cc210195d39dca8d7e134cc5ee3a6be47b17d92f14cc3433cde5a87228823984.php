<?php

/* @Benchmarking/Default/FonctionExistante/add.html.twig */
class __TwigTemplate_6c0510f19fa28dd809fe4d176be76e021a06b219cf1453e90f71e67dcbfd33d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/FonctionExistante/add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_563a4c073dafddbda74da83967363e15dff3a987510214ad32ad78be44d7e062 = $this->env->getExtension("native_profiler");
        $__internal_563a4c073dafddbda74da83967363e15dff3a987510214ad32ad78be44d7e062->enter($__internal_563a4c073dafddbda74da83967363e15dff3a987510214ad32ad78be44d7e062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563a4c073dafddbda74da83967363e15dff3a987510214ad32ad78be44d7e062->leave($__internal_563a4c073dafddbda74da83967363e15dff3a987510214ad32ad78be44d7e062_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_89447b7e59069cc31f15e4020178e728b703333fabb83beb1f1794cd2e27f9af = $this->env->getExtension("native_profiler");
        $__internal_89447b7e59069cc31f15e4020178e728b703333fabb83beb1f1794cd2e27f9af->enter($__internal_89447b7e59069cc31f15e4020178e728b703333fabb83beb1f1794cd2e27f9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_89447b7e59069cc31f15e4020178e728b703333fabb83beb1f1794cd2e27f9af->leave($__internal_89447b7e59069cc31f15e4020178e728b703333fabb83beb1f1794cd2e27f9af_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_a4b911c7193b8b6175fb774243f816fc9d8771ce6c7e146eb117d10b425088fe = $this->env->getExtension("native_profiler");
        $__internal_a4b911c7193b8b6175fb774243f816fc9d8771ce6c7e146eb117d10b425088fe->enter($__internal_a4b911c7193b8b6175fb774243f816fc9d8771ce6c7e146eb117d10b425088fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h2 class=\"panel-title\">Ajouter une fonction</h2>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FonctionExistante/form.html.twig");
        echo "
  </div>


";
        
        $__internal_a4b911c7193b8b6175fb774243f816fc9d8771ce6c7e146eb117d10b425088fe->leave($__internal_a4b911c7193b8b6175fb774243f816fc9d8771ce6c7e146eb117d10b425088fe_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FonctionExistante/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/FonctionExistante/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h2 class="panel-title">Ajouter une fonction</h2>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:FonctionExistante/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
