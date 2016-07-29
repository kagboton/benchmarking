<?php

/* @Benchmarking/Default/FonctionExistante/edit.html.twig */
class __TwigTemplate_b9c784236f5b07e10865d50760b0dd2023d617b3ed737a704f18ae0e46305829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/FonctionExistante/edit.html.twig", 3);
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
        $__internal_a2d2404ac895f354b39d9ffa713568a7d35cc0e8690bf6346cb37035d7b696ab = $this->env->getExtension("native_profiler");
        $__internal_a2d2404ac895f354b39d9ffa713568a7d35cc0e8690bf6346cb37035d7b696ab->enter($__internal_a2d2404ac895f354b39d9ffa713568a7d35cc0e8690bf6346cb37035d7b696ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d2404ac895f354b39d9ffa713568a7d35cc0e8690bf6346cb37035d7b696ab->leave($__internal_a2d2404ac895f354b39d9ffa713568a7d35cc0e8690bf6346cb37035d7b696ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_562dd9ae96f141392846a83bd6c79eb02d5fcabe9bb2fdb5f5b47bfcaeb8759e = $this->env->getExtension("native_profiler");
        $__internal_562dd9ae96f141392846a83bd6c79eb02d5fcabe9bb2fdb5f5b47bfcaeb8759e->enter($__internal_562dd9ae96f141392846a83bd6c79eb02d5fcabe9bb2fdb5f5b47bfcaeb8759e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_562dd9ae96f141392846a83bd6c79eb02d5fcabe9bb2fdb5f5b47bfcaeb8759e->leave($__internal_562dd9ae96f141392846a83bd6c79eb02d5fcabe9bb2fdb5f5b47bfcaeb8759e_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_ff327b96743ae3480f87e159bfb75d843f0b132c59e7537d2290f6d86f9eb19f = $this->env->getExtension("native_profiler");
        $__internal_ff327b96743ae3480f87e159bfb75d843f0b132c59e7537d2290f6d86f9eb19f->enter($__internal_ff327b96743ae3480f87e159bfb75d843f0b132c59e7537d2290f6d86f9eb19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une fonction</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FonctionExistante/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_view", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la fonction
      </a>
    </p>
  </div>


";
        
        $__internal_ff327b96743ae3480f87e159bfb75d843f0b132c59e7537d2290f6d86f9eb19f->leave($__internal_ff327b96743ae3480f87e159bfb75d843f0b132c59e7537d2290f6d86f9eb19f_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FonctionExistante/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 16,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FonctionExistante/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une fonction</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:FonctionExistante/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('fonction_view', {'id': fonction.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la fonction*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
