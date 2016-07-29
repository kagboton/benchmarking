<?php

/* @Benchmarking/Default/Segment/add.html.twig */
class __TwigTemplate_4756086c70b77b9463544fc2e4135ea0f2b26244c9e8828c0519c17ab767da0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Segment/add.html.twig", 3);
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
        $__internal_a3b421f544c4bc3e93991e42cd185133f6068e6c315ff57b044ae2e82ed09b38 = $this->env->getExtension("native_profiler");
        $__internal_a3b421f544c4bc3e93991e42cd185133f6068e6c315ff57b044ae2e82ed09b38->enter($__internal_a3b421f544c4bc3e93991e42cd185133f6068e6c315ff57b044ae2e82ed09b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b421f544c4bc3e93991e42cd185133f6068e6c315ff57b044ae2e82ed09b38->leave($__internal_a3b421f544c4bc3e93991e42cd185133f6068e6c315ff57b044ae2e82ed09b38_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_96ccc37849343d424f5e37a3369b3859507eb8185145bf19f137cb91ead63674 = $this->env->getExtension("native_profiler");
        $__internal_96ccc37849343d424f5e37a3369b3859507eb8185145bf19f137cb91ead63674->enter($__internal_96ccc37849343d424f5e37a3369b3859507eb8185145bf19f137cb91ead63674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_96ccc37849343d424f5e37a3369b3859507eb8185145bf19f137cb91ead63674->leave($__internal_96ccc37849343d424f5e37a3369b3859507eb8185145bf19f137cb91ead63674_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_da7bfb3e7e68543f7ead13a17d8ce0197866ba0f7351d0d498d071e9f763b0aa = $this->env->getExtension("native_profiler");
        $__internal_da7bfb3e7e68543f7ead13a17d8ce0197866ba0f7351d0d498d071e9f763b0aa->enter($__internal_da7bfb3e7e68543f7ead13a17d8ce0197866ba0f7351d0d498d071e9f763b0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter un segment</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Segment/form.html.twig");
        echo "
  </div>



";
        
        $__internal_da7bfb3e7e68543f7ead13a17d8ce0197866ba0f7351d0d498d071e9f763b0aa->leave($__internal_da7bfb3e7e68543f7ead13a17d8ce0197866ba0f7351d0d498d071e9f763b0aa_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Segment/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Segment/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un segment - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter un segment</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Segment/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
