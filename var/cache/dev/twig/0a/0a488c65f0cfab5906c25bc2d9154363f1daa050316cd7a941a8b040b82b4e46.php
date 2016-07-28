<?php

/* BenchmarkingBundle:Default/Famille:add.html.twig */
class __TwigTemplate_d76ba0336287f5b0c07e6c117c9bff1cd030d1cf889954a73e08d507eeec241c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Famille:add.html.twig", 3);
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
        $__internal_995a0be05252843e6a515eb7c665af1382ddeb15642d7cbe9c275510c043a2c0 = $this->env->getExtension("native_profiler");
        $__internal_995a0be05252843e6a515eb7c665af1382ddeb15642d7cbe9c275510c043a2c0->enter($__internal_995a0be05252843e6a515eb7c665af1382ddeb15642d7cbe9c275510c043a2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Famille:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995a0be05252843e6a515eb7c665af1382ddeb15642d7cbe9c275510c043a2c0->leave($__internal_995a0be05252843e6a515eb7c665af1382ddeb15642d7cbe9c275510c043a2c0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_364ccb3af22d6111c81ac64f83021dfc769fa3663648826cb05ea6ebb93926c9 = $this->env->getExtension("native_profiler");
        $__internal_364ccb3af22d6111c81ac64f83021dfc769fa3663648826cb05ea6ebb93926c9->enter($__internal_364ccb3af22d6111c81ac64f83021dfc769fa3663648826cb05ea6ebb93926c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_364ccb3af22d6111c81ac64f83021dfc769fa3663648826cb05ea6ebb93926c9->leave($__internal_364ccb3af22d6111c81ac64f83021dfc769fa3663648826cb05ea6ebb93926c9_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_f6eeae07317adc33954a80cb8254d8913e158562de603a6e78e054341d567022 = $this->env->getExtension("native_profiler");
        $__internal_f6eeae07317adc33954a80cb8254d8913e158562de603a6e78e054341d567022->enter($__internal_f6eeae07317adc33954a80cb8254d8913e158562de603a6e78e054341d567022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_f6eeae07317adc33954a80cb8254d8913e158562de603a6e78e054341d567022->leave($__internal_f6eeae07317adc33954a80cb8254d8913e158562de603a6e78e054341d567022_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Famille:add.html.twig";
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
