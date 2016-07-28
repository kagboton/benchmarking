<?php

/* @Benchmarking/Default/Famille/add.html.twig */
class __TwigTemplate_20150fadcf12fe3da3f931d50a77caaebd76869e29d026ce9d707687555fb55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Famille/add.html.twig", 3);
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
        $__internal_bf40a9d2c9f9a430cfd92b6d3d68a09a56baad92231d50e6b9bc6bfa19ad9fa3 = $this->env->getExtension("native_profiler");
        $__internal_bf40a9d2c9f9a430cfd92b6d3d68a09a56baad92231d50e6b9bc6bfa19ad9fa3->enter($__internal_bf40a9d2c9f9a430cfd92b6d3d68a09a56baad92231d50e6b9bc6bfa19ad9fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf40a9d2c9f9a430cfd92b6d3d68a09a56baad92231d50e6b9bc6bfa19ad9fa3->leave($__internal_bf40a9d2c9f9a430cfd92b6d3d68a09a56baad92231d50e6b9bc6bfa19ad9fa3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8de8feb612b05c358f542c2c30d14584fda44a3b6dd92324b0b7eef3609821ba = $this->env->getExtension("native_profiler");
        $__internal_8de8feb612b05c358f542c2c30d14584fda44a3b6dd92324b0b7eef3609821ba->enter($__internal_8de8feb612b05c358f542c2c30d14584fda44a3b6dd92324b0b7eef3609821ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8de8feb612b05c358f542c2c30d14584fda44a3b6dd92324b0b7eef3609821ba->leave($__internal_8de8feb612b05c358f542c2c30d14584fda44a3b6dd92324b0b7eef3609821ba_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_10bf04fb72169b7e895780547773348bed89295293251c79ec40fcdb9fa56eb8 = $this->env->getExtension("native_profiler");
        $__internal_10bf04fb72169b7e895780547773348bed89295293251c79ec40fcdb9fa56eb8->enter($__internal_10bf04fb72169b7e895780547773348bed89295293251c79ec40fcdb9fa56eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4>Ajouter une famille de fonctions</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Famille/form.html.twig");
        echo "
  </div>

";
        
        $__internal_10bf04fb72169b7e895780547773348bed89295293251c79ec40fcdb9fa56eb8->leave($__internal_10bf04fb72169b7e895780547773348bed89295293251c79ec40fcdb9fa56eb8_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Famille/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Famille/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4>Ajouter une famille de fonctions</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Famille/form.html.twig") }}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
