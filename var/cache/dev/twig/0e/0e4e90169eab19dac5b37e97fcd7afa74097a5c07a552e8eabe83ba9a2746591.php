<?php

/* @Benchmarking/Default/FormatEcran/edit.html.twig */
class __TwigTemplate_1d5bdc7ff067e15016e92feb374031667658562b53466253ed4d425193231bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/FormatEcran/edit.html.twig", 3);
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
        $__internal_0b4a4fbe579cdea2731445d406f2c4b6c76e599d9ebd744b46b0c846f8721689 = $this->env->getExtension("native_profiler");
        $__internal_0b4a4fbe579cdea2731445d406f2c4b6c76e599d9ebd744b46b0c846f8721689->enter($__internal_0b4a4fbe579cdea2731445d406f2c4b6c76e599d9ebd744b46b0c846f8721689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4a4fbe579cdea2731445d406f2c4b6c76e599d9ebd744b46b0c846f8721689->leave($__internal_0b4a4fbe579cdea2731445d406f2c4b6c76e599d9ebd744b46b0c846f8721689_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f838b9665966131f40a4b32cacaa62b269a4d13b4fa66ed3c7eb5290eecd238 = $this->env->getExtension("native_profiler");
        $__internal_7f838b9665966131f40a4b32cacaa62b269a4d13b4fa66ed3c7eb5290eecd238->enter($__internal_7f838b9665966131f40a4b32cacaa62b269a4d13b4fa66ed3c7eb5290eecd238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un Format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7f838b9665966131f40a4b32cacaa62b269a4d13b4fa66ed3c7eb5290eecd238->leave($__internal_7f838b9665966131f40a4b32cacaa62b269a4d13b4fa66ed3c7eb5290eecd238_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_dd3e429c297ec04b964cb64529e2d2785758c412b74e59da2668a94ec8b999d9 = $this->env->getExtension("native_profiler");
        $__internal_dd3e429c297ec04b964cb64529e2d2785758c412b74e59da2668a94ec8b999d9->enter($__internal_dd3e429c297ec04b964cb64529e2d2785758c412b74e59da2668a94ec8b999d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un Format d'écran</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FormatEcran/form.html.twig");
        echo "

  <p>
    Modification d'un Format d'écran déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formatEcran_view", array("id" => $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au Format d'écran
    </a>
  </p>

";
        
        $__internal_dd3e429c297ec04b964cb64529e2d2785758c412b74e59da2668a94ec8b999d9->leave($__internal_dd3e429c297ec04b964cb64529e2d2785758c412b74e59da2668a94ec8b999d9_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FormatEcran/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un Format d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un Format d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:FormatEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un Format d'écran déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('formatEcran_view', {'id': formatEcran.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au Format d'écran*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
