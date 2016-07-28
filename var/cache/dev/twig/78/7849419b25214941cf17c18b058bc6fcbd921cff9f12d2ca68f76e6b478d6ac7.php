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
        $__internal_f0e8191ccae40d2d998eb2192c59ce8ee26429158c608b10acdf9d0e774a0d9e = $this->env->getExtension("native_profiler");
        $__internal_f0e8191ccae40d2d998eb2192c59ce8ee26429158c608b10acdf9d0e774a0d9e->enter($__internal_f0e8191ccae40d2d998eb2192c59ce8ee26429158c608b10acdf9d0e774a0d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Motorisation/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e8191ccae40d2d998eb2192c59ce8ee26429158c608b10acdf9d0e774a0d9e->leave($__internal_f0e8191ccae40d2d998eb2192c59ce8ee26429158c608b10acdf9d0e774a0d9e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c5d15092412b1b7ff47bae014b24c9d346c4fe55fd3c9bb9c94543409e2c306 = $this->env->getExtension("native_profiler");
        $__internal_7c5d15092412b1b7ff47bae014b24c9d346c4fe55fd3c9bb9c94543409e2c306->enter($__internal_7c5d15092412b1b7ff47bae014b24c9d346c4fe55fd3c9bb9c94543409e2c306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7c5d15092412b1b7ff47bae014b24c9d346c4fe55fd3c9bb9c94543409e2c306->leave($__internal_7c5d15092412b1b7ff47bae014b24c9d346c4fe55fd3c9bb9c94543409e2c306_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_66e72eacde822028d11e9e51f67746ac979aa038aab3cd4b7567d06980c35d4e = $this->env->getExtension("native_profiler");
        $__internal_66e72eacde822028d11e9e51f67746ac979aa038aab3cd4b7567d06980c35d4e->enter($__internal_66e72eacde822028d11e9e51f67746ac979aa038aab3cd4b7567d06980c35d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_66e72eacde822028d11e9e51f67746ac979aa038aab3cd4b7567d06980c35d4e->leave($__internal_66e72eacde822028d11e9e51f67746ac979aa038aab3cd4b7567d06980c35d4e_prof);

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
