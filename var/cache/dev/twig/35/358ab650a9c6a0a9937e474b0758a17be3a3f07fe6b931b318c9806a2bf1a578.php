<?php

/* BenchmarkingBundle:Default/Marque:form.html.twig */
class __TwigTemplate_555146a12e8920e5288228d88809384fbc98e606f47f7e6bbbcce8356b456d03 extends Twig_Template
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
        $__internal_ebf94ff2fa6a0e8c9bdb3b2675819c7bee40e525bc35aa19eb267d579b03e0ec = $this->env->getExtension("native_profiler");
        $__internal_ebf94ff2fa6a0e8c9bdb3b2675819c7bee40e525bc35aa19eb267d579b03e0ec->enter($__internal_ebf94ff2fa6a0e8c9bdb3b2675819c7bee40e525bc35aa19eb267d579b03e0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Marque:form.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_ebf94ff2fa6a0e8c9bdb3b2675819c7bee40e525bc35aa19eb267d579b03e0ec->leave($__internal_ebf94ff2fa6a0e8c9bdb3b2675819c7bee40e525bc35aa19eb267d579b03e0ec_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Marque:form.html.twig";
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
