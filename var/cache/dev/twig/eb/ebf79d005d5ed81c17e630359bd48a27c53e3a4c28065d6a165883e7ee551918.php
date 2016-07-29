<?php

/* @Benchmarking/Default/TypeRetourActivation/edit.html.twig */
class __TwigTemplate_c0309c84394992efdb36bb72a1b91748546b8ef0a0f0020562ff0c178aa4766f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeRetourActivation/edit.html.twig", 3);
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
        $__internal_c06e52d799d4038f7e78f824de11dc94b1ad2827aa57bbaa8e00d9507606c723 = $this->env->getExtension("native_profiler");
        $__internal_c06e52d799d4038f7e78f824de11dc94b1ad2827aa57bbaa8e00d9507606c723->enter($__internal_c06e52d799d4038f7e78f824de11dc94b1ad2827aa57bbaa8e00d9507606c723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06e52d799d4038f7e78f824de11dc94b1ad2827aa57bbaa8e00d9507606c723->leave($__internal_c06e52d799d4038f7e78f824de11dc94b1ad2827aa57bbaa8e00d9507606c723_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c59b5bb245ee583b529c22b1b4c319512d9470b6458e83a9b5e38b11f4fa964c = $this->env->getExtension("native_profiler");
        $__internal_c59b5bb245ee583b529c22b1b4c319512d9470b6458e83a9b5e38b11f4fa964c->enter($__internal_c59b5bb245ee583b529c22b1b4c319512d9470b6458e83a9b5e38b11f4fa964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c59b5bb245ee583b529c22b1b4c319512d9470b6458e83a9b5e38b11f4fa964c->leave($__internal_c59b5bb245ee583b529c22b1b4c319512d9470b6458e83a9b5e38b11f4fa964c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_1f5ca6fe27c534dc77bbb12202d0c1e156512b4600b2aaac4b9e3dacef0e9036 = $this->env->getExtension("native_profiler");
        $__internal_1f5ca6fe27c534dc77bbb12202d0c1e156512b4600b2aaac4b9e3dacef0e9036->enter($__internal_1f5ca6fe27c534dc77bbb12202d0c1e156512b4600b2aaac4b9e3dacef0e9036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un retour d'activation</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig");
        echo "

  <p>
    Modification d'un retour d'activation existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_view", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au retour d'activation
    </a>
  </p>

";
        
        $__internal_1f5ca6fe27c534dc77bbb12202d0c1e156512b4600b2aaac4b9e3dacef0e9036->leave($__internal_1f5ca6fe27c534dc77bbb12202d0c1e156512b4600b2aaac4b9e3dacef0e9036_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un retour d'activation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un retour d'activation existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('retourActivation_view', {'id': retourActivation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au retour d'activation*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
