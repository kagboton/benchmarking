<?php

/* @Benchmarking/Default/BoiteVitesse/form.html.twig */
class __TwigTemplate_ee4ff9d065aba5714e9bb01b79fa453becd60f1a1746d01570d7c02f3285a8d5 extends Twig_Template
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
        $__internal_e086e8f8ee06385b5bf87a88f1aaab535a8acc108b0acf54d924b66e0d2c9130 = $this->env->getExtension("native_profiler");
        $__internal_e086e8f8ee06385b5bf87a88f1aaab535a8acc108b0acf54d924b66e0d2c9130->enter($__internal_e086e8f8ee06385b5bf87a88f1aaab535a8acc108b0acf54d924b66e0d2c9130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/form.html.twig"));

        // line 2
        echo "
  ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_e086e8f8ee06385b5bf87a88f1aaab535a8acc108b0acf54d924b66e0d2c9130->leave($__internal_e086e8f8ee06385b5bf87a88f1aaab535a8acc108b0acf54d924b66e0d2c9130_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/BoiteVitesse/form.html.twig #}*/
/* */
/*   {{ form(form) }}*/
/* */
/* */
