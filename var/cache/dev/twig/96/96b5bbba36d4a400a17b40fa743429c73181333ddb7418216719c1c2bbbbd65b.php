<?php

/* @Benchmarking/Default/Marque/add.html.twig */
class __TwigTemplate_753225c3cda0cd3df20ecfc361f0b0a3cc46b18560a620f163a599c66f0bdd07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Marque/add.html.twig", 3);
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
        $__internal_056d4f5bb351c7b14f6651ca077929a391d93f6d70a75a6bc2ae00887342c60c = $this->env->getExtension("native_profiler");
        $__internal_056d4f5bb351c7b14f6651ca077929a391d93f6d70a75a6bc2ae00887342c60c->enter($__internal_056d4f5bb351c7b14f6651ca077929a391d93f6d70a75a6bc2ae00887342c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056d4f5bb351c7b14f6651ca077929a391d93f6d70a75a6bc2ae00887342c60c->leave($__internal_056d4f5bb351c7b14f6651ca077929a391d93f6d70a75a6bc2ae00887342c60c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f7365ebc5fce04a32a1b8810c3edcc456e35da3282cd81a89bbffb4de901855 = $this->env->getExtension("native_profiler");
        $__internal_8f7365ebc5fce04a32a1b8810c3edcc456e35da3282cd81a89bbffb4de901855->enter($__internal_8f7365ebc5fce04a32a1b8810c3edcc456e35da3282cd81a89bbffb4de901855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f7365ebc5fce04a32a1b8810c3edcc456e35da3282cd81a89bbffb4de901855->leave($__internal_8f7365ebc5fce04a32a1b8810c3edcc456e35da3282cd81a89bbffb4de901855_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_f8f74fa3bf7489aadf32ccbba3079edec199d7f5aae9a2e6d3dd385909f0479f = $this->env->getExtension("native_profiler");
        $__internal_f8f74fa3bf7489aadf32ccbba3079edec199d7f5aae9a2e6d3dd385909f0479f->enter($__internal_f8f74fa3bf7489aadf32ccbba3079edec199d7f5aae9a2e6d3dd385909f0479f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter une marque</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Marque/form.html.twig");
        echo "
  </div>

";
        
        $__internal_f8f74fa3bf7489aadf32ccbba3079edec199d7f5aae9a2e6d3dd385909f0479f->leave($__internal_f8f74fa3bf7489aadf32ccbba3079edec199d7f5aae9a2e6d3dd385909f0479f_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Marque/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter une marque</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Marque/form.html.twig") }}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
