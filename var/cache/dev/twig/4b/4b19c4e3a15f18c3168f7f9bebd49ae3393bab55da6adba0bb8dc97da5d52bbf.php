<?php

/* @Benchmarking/Default/Marque/form.html.twig */
class __TwigTemplate_95449f5e67e73f128d0a6463af89b7a6056d5d0e7e932cba028ccf2867865b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edd037415545ff97486df5e03c1ad71ae8905e16648c11c4984f43d742b9159d = $this->env->getExtension("native_profiler");
        $__internal_edd037415545ff97486df5e03c1ad71ae8905e16648c11c4984f43d742b9159d->enter($__internal_edd037415545ff97486df5e03c1ad71ae8905e16648c11c4984f43d742b9159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/form.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_edd037415545ff97486df5e03c1ad71ae8905e16648c11c4984f43d742b9159d->leave($__internal_edd037415545ff97486df5e03c1ad71ae8905e16648c11c4984f43d742b9159d_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Marque/form.html.twig #}*/
/* */
/* {{ form(form) }}*/
