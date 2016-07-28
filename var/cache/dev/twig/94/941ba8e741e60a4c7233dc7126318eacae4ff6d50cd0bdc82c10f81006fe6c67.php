<?php

/* BenchmarkingBundle:Default/Motorisation:edit.html.twig */
class __TwigTemplate_7985f8a325b3b25770b9f3fb28bbb9756447d43f380e188d19578aeb22000747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Motorisation:edit.html.twig", 3);
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
        $__internal_2d433a303e05ba97b23b827667247a944f3fd790d8665b2185e263f8f99ba543 = $this->env->getExtension("native_profiler");
        $__internal_2d433a303e05ba97b23b827667247a944f3fd790d8665b2185e263f8f99ba543->enter($__internal_2d433a303e05ba97b23b827667247a944f3fd790d8665b2185e263f8f99ba543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Motorisation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d433a303e05ba97b23b827667247a944f3fd790d8665b2185e263f8f99ba543->leave($__internal_2d433a303e05ba97b23b827667247a944f3fd790d8665b2185e263f8f99ba543_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dbaf3bba727a6fe3495cdc29a7f529ae8137392af9e8e4e5533a224ee422f26 = $this->env->getExtension("native_profiler");
        $__internal_6dbaf3bba727a6fe3495cdc29a7f529ae8137392af9e8e4e5533a224ee422f26->enter($__internal_6dbaf3bba727a6fe3495cdc29a7f529ae8137392af9e8e4e5533a224ee422f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6dbaf3bba727a6fe3495cdc29a7f529ae8137392af9e8e4e5533a224ee422f26->leave($__internal_6dbaf3bba727a6fe3495cdc29a7f529ae8137392af9e8e4e5533a224ee422f26_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_975685ca30dc6892df9257d2a34c4c8503e00871b69c871857d0bdb05ff7f305 = $this->env->getExtension("native_profiler");
        $__internal_975685ca30dc6892df9257d2a34c4c8503e00871b69c871857d0bdb05ff7f305->enter($__internal_975685ca30dc6892df9257d2a34c4c8503e00871b69c871857d0bdb05ff7f305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une motorisation</h4>
  </div>


  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Motorisation/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motorisation_view", array("id" => $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la motorisation
      </a>
    </p>
  </div>

";
        
        $__internal_975685ca30dc6892df9257d2a34c4c8503e00871b69c871857d0bdb05ff7f305->leave($__internal_975685ca30dc6892df9257d2a34c4c8503e00871b69c871857d0bdb05ff7f305_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Motorisation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Motorisation/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une motorisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une motorisation</h4>*/
/*   </div>*/
/* */
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Motorisation/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('motorisation_view', {'id': motorisation.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la motorisation*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
