<?php

/* BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig */
class __TwigTemplate_9a69af8b1b0e2ce52393ac2cc8336a49f866f1b3d7a0be27ac8fbcb41a94445e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig", 3);
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
        $__internal_5dc82ec9154d0052c97d2e4e5ce02f4e8c85e26453e1469aad24ed19fc2563c7 = $this->env->getExtension("native_profiler");
        $__internal_5dc82ec9154d0052c97d2e4e5ce02f4e8c85e26453e1469aad24ed19fc2563c7->enter($__internal_5dc82ec9154d0052c97d2e4e5ce02f4e8c85e26453e1469aad24ed19fc2563c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dc82ec9154d0052c97d2e4e5ce02f4e8c85e26453e1469aad24ed19fc2563c7->leave($__internal_5dc82ec9154d0052c97d2e4e5ce02f4e8c85e26453e1469aad24ed19fc2563c7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2fb9c6c2353833c00bbdc1af3bbb54cfe44e11745ea3767c55193a7598677ba = $this->env->getExtension("native_profiler");
        $__internal_a2fb9c6c2353833c00bbdc1af3bbb54cfe44e11745ea3767c55193a7598677ba->enter($__internal_a2fb9c6c2353833c00bbdc1af3bbb54cfe44e11745ea3767c55193a7598677ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a2fb9c6c2353833c00bbdc1af3bbb54cfe44e11745ea3767c55193a7598677ba->leave($__internal_a2fb9c6c2353833c00bbdc1af3bbb54cfe44e11745ea3767c55193a7598677ba_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_8eb581e82ee7579cba8202f9016de8290f765df5578c740ed1d3eb72eb5f9611 = $this->env->getExtension("native_profiler");
        $__internal_8eb581e82ee7579cba8202f9016de8290f765df5578c740ed1d3eb72eb5f9611->enter($__internal_8eb581e82ee7579cba8202f9016de8290f765df5578c740ed1d3eb72eb5f9611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un retour d'activation</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig");
        echo "

  <p>
    Ce retour d'activation sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_8eb581e82ee7579cba8202f9016de8290f765df5578c740ed1d3eb72eb5f9611->leave($__internal_8eb581e82ee7579cba8202f9016de8290f765df5578c740ed1d3eb72eb5f9611_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeRetourActivation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeRetourActivation/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un retour d'activation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce retour d'activation sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
