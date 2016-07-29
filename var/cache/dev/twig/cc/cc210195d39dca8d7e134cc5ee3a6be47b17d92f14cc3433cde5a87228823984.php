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
        $__internal_410999c06b7fea600b5d45e0972f9aa4b16145fef52a897009a28a1f5d9e3c55 = $this->env->getExtension("native_profiler");
        $__internal_410999c06b7fea600b5d45e0972f9aa4b16145fef52a897009a28a1f5d9e3c55->enter($__internal_410999c06b7fea600b5d45e0972f9aa4b16145fef52a897009a28a1f5d9e3c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410999c06b7fea600b5d45e0972f9aa4b16145fef52a897009a28a1f5d9e3c55->leave($__internal_410999c06b7fea600b5d45e0972f9aa4b16145fef52a897009a28a1f5d9e3c55_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ced06fac9f241bf3f67aa905edf4f459b34d8e8b1d137c5407ec5fb552338277 = $this->env->getExtension("native_profiler");
        $__internal_ced06fac9f241bf3f67aa905edf4f459b34d8e8b1d137c5407ec5fb552338277->enter($__internal_ced06fac9f241bf3f67aa905edf4f459b34d8e8b1d137c5407ec5fb552338277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ced06fac9f241bf3f67aa905edf4f459b34d8e8b1d137c5407ec5fb552338277->leave($__internal_ced06fac9f241bf3f67aa905edf4f459b34d8e8b1d137c5407ec5fb552338277_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_1e5dbd8feaa4c7af9cb5d83f900127cf9712756827e50f611f7f03bf82891c28 = $this->env->getExtension("native_profiler");
        $__internal_1e5dbd8feaa4c7af9cb5d83f900127cf9712756827e50f611f7f03bf82891c28->enter($__internal_1e5dbd8feaa4c7af9cb5d83f900127cf9712756827e50f611f7f03bf82891c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_1e5dbd8feaa4c7af9cb5d83f900127cf9712756827e50f611f7f03bf82891c28->leave($__internal_1e5dbd8feaa4c7af9cb5d83f900127cf9712756827e50f611f7f03bf82891c28_prof);

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
