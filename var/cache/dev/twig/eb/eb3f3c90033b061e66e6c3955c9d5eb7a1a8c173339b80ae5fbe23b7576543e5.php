<?php

/* BenchmarkingBundle:Default/Marque:add.html.twig */
class __TwigTemplate_6ee2ee8919f9922c6536a8fdf616b747f7ddc411a7da1615ebfcf81a529a5071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Marque:add.html.twig", 3);
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
        $__internal_4eb97c840adfae9b5539e581221a46316a7b0c32844ffbb43aac3a0df36d2ca8 = $this->env->getExtension("native_profiler");
        $__internal_4eb97c840adfae9b5539e581221a46316a7b0c32844ffbb43aac3a0df36d2ca8->enter($__internal_4eb97c840adfae9b5539e581221a46316a7b0c32844ffbb43aac3a0df36d2ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Marque:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb97c840adfae9b5539e581221a46316a7b0c32844ffbb43aac3a0df36d2ca8->leave($__internal_4eb97c840adfae9b5539e581221a46316a7b0c32844ffbb43aac3a0df36d2ca8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd24ab746cb1a52276f187bf81904b8a26cb7ebca39684e2b4ce02ca96bb560e = $this->env->getExtension("native_profiler");
        $__internal_fd24ab746cb1a52276f187bf81904b8a26cb7ebca39684e2b4ce02ca96bb560e->enter($__internal_fd24ab746cb1a52276f187bf81904b8a26cb7ebca39684e2b4ce02ca96bb560e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fd24ab746cb1a52276f187bf81904b8a26cb7ebca39684e2b4ce02ca96bb560e->leave($__internal_fd24ab746cb1a52276f187bf81904b8a26cb7ebca39684e2b4ce02ca96bb560e_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_fe4042fbcf371a8fdac02c188e55c9154f4c136c9f27fd647f9b40448fc48158 = $this->env->getExtension("native_profiler");
        $__internal_fe4042fbcf371a8fdac02c188e55c9154f4c136c9f27fd647f9b40448fc48158->enter($__internal_fe4042fbcf371a8fdac02c188e55c9154f4c136c9f27fd647f9b40448fc48158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_fe4042fbcf371a8fdac02c188e55c9154f4c136c9f27fd647f9b40448fc48158->leave($__internal_fe4042fbcf371a8fdac02c188e55c9154f4c136c9f27fd647f9b40448fc48158_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Marque:add.html.twig";
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
