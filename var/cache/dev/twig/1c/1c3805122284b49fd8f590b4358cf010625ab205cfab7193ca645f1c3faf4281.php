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
        $__internal_98cea8f9b02049be63ddee4ea5edbae914695bf849eaadb93cb5a68c443c1472 = $this->env->getExtension("native_profiler");
        $__internal_98cea8f9b02049be63ddee4ea5edbae914695bf849eaadb93cb5a68c443c1472->enter($__internal_98cea8f9b02049be63ddee4ea5edbae914695bf849eaadb93cb5a68c443c1472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/form.html.twig"));

        // line 2
        echo "
  ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_98cea8f9b02049be63ddee4ea5edbae914695bf849eaadb93cb5a68c443c1472->leave($__internal_98cea8f9b02049be63ddee4ea5edbae914695bf849eaadb93cb5a68c443c1472_prof);

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
