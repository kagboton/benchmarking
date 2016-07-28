<?php

/* BenchmarkingBundle:Default/Segment:add.html.twig */
class __TwigTemplate_43ddc8c77bf41623e8945201389180d4b1072a1c3975cbc81afcc0ae7ed65aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Segment:add.html.twig", 3);
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
        $__internal_daa0e6760cea52b8d114e815b1590d6ce0bf5fa26ecfd7979663903663a0bc4a = $this->env->getExtension("native_profiler");
        $__internal_daa0e6760cea52b8d114e815b1590d6ce0bf5fa26ecfd7979663903663a0bc4a->enter($__internal_daa0e6760cea52b8d114e815b1590d6ce0bf5fa26ecfd7979663903663a0bc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Segment:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daa0e6760cea52b8d114e815b1590d6ce0bf5fa26ecfd7979663903663a0bc4a->leave($__internal_daa0e6760cea52b8d114e815b1590d6ce0bf5fa26ecfd7979663903663a0bc4a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_85b14efd6c2cac30c86186eefce178e74082e909c34a6309f417f977c571d4dc = $this->env->getExtension("native_profiler");
        $__internal_85b14efd6c2cac30c86186eefce178e74082e909c34a6309f417f977c571d4dc->enter($__internal_85b14efd6c2cac30c86186eefce178e74082e909c34a6309f417f977c571d4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_85b14efd6c2cac30c86186eefce178e74082e909c34a6309f417f977c571d4dc->leave($__internal_85b14efd6c2cac30c86186eefce178e74082e909c34a6309f417f977c571d4dc_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_9a32ed0ad8877b1f15525df71418aa6987213c620380ccb85416091b4d1e9bbd = $this->env->getExtension("native_profiler");
        $__internal_9a32ed0ad8877b1f15525df71418aa6987213c620380ccb85416091b4d1e9bbd->enter($__internal_9a32ed0ad8877b1f15525df71418aa6987213c620380ccb85416091b4d1e9bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_9a32ed0ad8877b1f15525df71418aa6987213c620380ccb85416091b4d1e9bbd->leave($__internal_9a32ed0ad8877b1f15525df71418aa6987213c620380ccb85416091b4d1e9bbd_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Segment:add.html.twig";
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
