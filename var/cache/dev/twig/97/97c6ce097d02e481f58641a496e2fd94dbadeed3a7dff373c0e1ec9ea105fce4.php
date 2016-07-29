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
        $__internal_b537df4020a3d225e8d06645ebd85192475b2a670911fd98a4cd14752efa9980 = $this->env->getExtension("native_profiler");
        $__internal_b537df4020a3d225e8d06645ebd85192475b2a670911fd98a4cd14752efa9980->enter($__internal_b537df4020a3d225e8d06645ebd85192475b2a670911fd98a4cd14752efa9980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Segment:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b537df4020a3d225e8d06645ebd85192475b2a670911fd98a4cd14752efa9980->leave($__internal_b537df4020a3d225e8d06645ebd85192475b2a670911fd98a4cd14752efa9980_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_88c4f8e57a3e7816993639176aafc167b5f65c007ab151f4cc69a320fd1e59a4 = $this->env->getExtension("native_profiler");
        $__internal_88c4f8e57a3e7816993639176aafc167b5f65c007ab151f4cc69a320fd1e59a4->enter($__internal_88c4f8e57a3e7816993639176aafc167b5f65c007ab151f4cc69a320fd1e59a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_88c4f8e57a3e7816993639176aafc167b5f65c007ab151f4cc69a320fd1e59a4->leave($__internal_88c4f8e57a3e7816993639176aafc167b5f65c007ab151f4cc69a320fd1e59a4_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_00ebe48ce5107ff04f12c64aea14309c1706e3c28eefb7994b68b311f40e0d12 = $this->env->getExtension("native_profiler");
        $__internal_00ebe48ce5107ff04f12c64aea14309c1706e3c28eefb7994b68b311f40e0d12->enter($__internal_00ebe48ce5107ff04f12c64aea14309c1706e3c28eefb7994b68b311f40e0d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_00ebe48ce5107ff04f12c64aea14309c1706e3c28eefb7994b68b311f40e0d12->leave($__internal_00ebe48ce5107ff04f12c64aea14309c1706e3c28eefb7994b68b311f40e0d12_prof);

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
