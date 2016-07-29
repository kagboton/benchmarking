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
        $__internal_7a52b293c3eaf2dad79127af2bac0cd6cc0a16ad9c8b2b355538baba8c5a11ba = $this->env->getExtension("native_profiler");
        $__internal_7a52b293c3eaf2dad79127af2bac0cd6cc0a16ad9c8b2b355538baba8c5a11ba->enter($__internal_7a52b293c3eaf2dad79127af2bac0cd6cc0a16ad9c8b2b355538baba8c5a11ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Marque:form.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_7a52b293c3eaf2dad79127af2bac0cd6cc0a16ad9c8b2b355538baba8c5a11ba->leave($__internal_7a52b293c3eaf2dad79127af2bac0cd6cc0a16ad9c8b2b355538baba8c5a11ba_prof);

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
