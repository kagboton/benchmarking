<?php

/* @Benchmarking/Default/Motorisation/add.html.twig */
class __TwigTemplate_77e42c6d65670cf4952a52ecd03c233d5e6ffdcc3138029255a8b595986256ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Motorisation/add.html.twig", 3);
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
        $__internal_faf187a65816c34a66d1cc048c7992e770b8525e0d37a2ff7eba7e63bad5c7fa = $this->env->getExtension("native_profiler");
        $__internal_faf187a65816c34a66d1cc048c7992e770b8525e0d37a2ff7eba7e63bad5c7fa->enter($__internal_faf187a65816c34a66d1cc048c7992e770b8525e0d37a2ff7eba7e63bad5c7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Motorisation/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf187a65816c34a66d1cc048c7992e770b8525e0d37a2ff7eba7e63bad5c7fa->leave($__internal_faf187a65816c34a66d1cc048c7992e770b8525e0d37a2ff7eba7e63bad5c7fa_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_648f3932dbb4c4e40c4a4346554f1d4f58423e18d51037cf1f3893f1958a20cf = $this->env->getExtension("native_profiler");
        $__internal_648f3932dbb4c4e40c4a4346554f1d4f58423e18d51037cf1f3893f1958a20cf->enter($__internal_648f3932dbb4c4e40c4a4346554f1d4f58423e18d51037cf1f3893f1958a20cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_648f3932dbb4c4e40c4a4346554f1d4f58423e18d51037cf1f3893f1958a20cf->leave($__internal_648f3932dbb4c4e40c4a4346554f1d4f58423e18d51037cf1f3893f1958a20cf_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_923d038904b786de7de6ba2b4310309c9c8921c19b90180a4406c623c3f0b4d2 = $this->env->getExtension("native_profiler");
        $__internal_923d038904b786de7de6ba2b4310309c9c8921c19b90180a4406c623c3f0b4d2->enter($__internal_923d038904b786de7de6ba2b4310309c9c8921c19b90180a4406c623c3f0b4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-headin\">
    <h4 class=\"panel-title\">Ajouter une motorisation</h4>
  </div>

  <div class=\"pane-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Motorisation/form.html.twig");
        echo "
  </div>


";
        
        $__internal_923d038904b786de7de6ba2b4310309c9c8921c19b90180a4406c623c3f0b4d2->leave($__internal_923d038904b786de7de6ba2b4310309c9c8921c19b90180a4406c623c3f0b4d2_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Motorisation/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Motorisation/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une motorisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-headin">*/
/*     <h4 class="panel-title">Ajouter une motorisation</h4>*/
/*   </div>*/
/* */
/*   <div class="pane-body">*/
/*     {{ include("BenchmarkingBundle:Default:Motorisation/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
