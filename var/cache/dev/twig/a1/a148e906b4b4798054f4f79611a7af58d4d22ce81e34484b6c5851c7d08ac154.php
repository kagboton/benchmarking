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
        $__internal_0cd837fcad686ba022a7665fdea52bd21726a0fc68053020489f29d6d979d651 = $this->env->getExtension("native_profiler");
        $__internal_0cd837fcad686ba022a7665fdea52bd21726a0fc68053020489f29d6d979d651->enter($__internal_0cd837fcad686ba022a7665fdea52bd21726a0fc68053020489f29d6d979d651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd837fcad686ba022a7665fdea52bd21726a0fc68053020489f29d6d979d651->leave($__internal_0cd837fcad686ba022a7665fdea52bd21726a0fc68053020489f29d6d979d651_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_85d2cbd7d8e5a89ec9da34b308385e55d3d6d5fc6dd2f1f06049474007532252 = $this->env->getExtension("native_profiler");
        $__internal_85d2cbd7d8e5a89ec9da34b308385e55d3d6d5fc6dd2f1f06049474007532252->enter($__internal_85d2cbd7d8e5a89ec9da34b308385e55d3d6d5fc6dd2f1f06049474007532252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_85d2cbd7d8e5a89ec9da34b308385e55d3d6d5fc6dd2f1f06049474007532252->leave($__internal_85d2cbd7d8e5a89ec9da34b308385e55d3d6d5fc6dd2f1f06049474007532252_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_7c0deae15b5e12922c83f585265cd5de08f16f5aab7f3827249bdd69be9ee541 = $this->env->getExtension("native_profiler");
        $__internal_7c0deae15b5e12922c83f585265cd5de08f16f5aab7f3827249bdd69be9ee541->enter($__internal_7c0deae15b5e12922c83f585265cd5de08f16f5aab7f3827249bdd69be9ee541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_7c0deae15b5e12922c83f585265cd5de08f16f5aab7f3827249bdd69be9ee541->leave($__internal_7c0deae15b5e12922c83f585265cd5de08f16f5aab7f3827249bdd69be9ee541_prof);

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
