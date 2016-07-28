<?php

/* @Benchmarking/Default/Marque/edit.html.twig */
class __TwigTemplate_96f17329d39f5afea7420f662fde9e10a27e433d1e6ccf69c6e5f1e52587dd0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBunlde::layout.html.twig", "@Benchmarking/Default/Marque/edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBunlde::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e8cb4370f31c396a8fe2f4e4c6115c52e8020110efb4c34a4432b9d31b82af4 = $this->env->getExtension("native_profiler");
        $__internal_1e8cb4370f31c396a8fe2f4e4c6115c52e8020110efb4c34a4432b9d31b82af4->enter($__internal_1e8cb4370f31c396a8fe2f4e4c6115c52e8020110efb4c34a4432b9d31b82af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e8cb4370f31c396a8fe2f4e4c6115c52e8020110efb4c34a4432b9d31b82af4->leave($__internal_1e8cb4370f31c396a8fe2f4e4c6115c52e8020110efb4c34a4432b9d31b82af4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a164744031ba152e6c7c79c8e8d554838719460b9533126bd15f439958988da = $this->env->getExtension("native_profiler");
        $__internal_6a164744031ba152e6c7c79c8e8d554838719460b9533126bd15f439958988da->enter($__internal_6a164744031ba152e6c7c79c8e8d554838719460b9533126bd15f439958988da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6a164744031ba152e6c7c79c8e8d554838719460b9533126bd15f439958988da->leave($__internal_6a164744031ba152e6c7c79c8e8d554838719460b9533126bd15f439958988da_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_6d8cbb8cec8af073a3192c41b60d8a7e64d0d85811aa046e9b40a8a4a576797e = $this->env->getExtension("native_profiler");
        $__internal_6d8cbb8cec8af073a3192c41b60d8a7e64d0d85811aa046e9b40a8a4a576797e->enter($__internal_6d8cbb8cec8af073a3192c41b60d8a7e64d0d85811aa046e9b40a8a4a576797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une marque</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Marque/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_view", array("id" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la marque
      </a>
    </p>
  </div>

";
        
        $__internal_6d8cbb8cec8af073a3192c41b60d8a7e64d0d85811aa046e9b40a8a4a576797e->leave($__internal_6d8cbb8cec8af073a3192c41b60d8a7e64d0d85811aa046e9b40a8a4a576797e_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Marque/edit.html.twig #}*/
/* */
/* {% extends "AdminBunlde::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une marque</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Marque/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('marque_view', {'id': marque.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la marque*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
