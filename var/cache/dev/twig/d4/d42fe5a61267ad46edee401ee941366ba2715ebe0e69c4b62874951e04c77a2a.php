<?php

/* @Benchmarking/Default/Segment/form.html.twig */
class __TwigTemplate_a6672db20a4a3d08405f9f723e62a44696cb59d165eb69421fb34bbe9bda9704 extends Twig_Template
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
        $__internal_2dd364c51c1a5062059293e0fd64eac2cfa95d3a3336e6141c4834fbd489b1c8 = $this->env->getExtension("native_profiler");
        $__internal_2dd364c51c1a5062059293e0fd64eac2cfa95d3a3336e6141c4834fbd489b1c8->enter($__internal_2dd364c51c1a5062059293e0fd64eac2cfa95d3a3336e6141c4834fbd489b1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/form.html.twig"));

        // line 2
        echo "
  ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_2dd364c51c1a5062059293e0fd64eac2cfa95d3a3336e6141c4834fbd489b1c8->leave($__internal_2dd364c51c1a5062059293e0fd64eac2cfa95d3a3336e6141c4834fbd489b1c8_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Segment/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Segment/form.html.twig #}*/
/* */
/*   {{ form(form) }}*/
/* */
