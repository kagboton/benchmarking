<?php

/* BenchmarkingBundle:Default/BoiteVitesse:form.html.twig */
class __TwigTemplate_f4e48b31be028fb7c643abb255c8936ababcaa30daa3a3c8c8a6d777c70b653c extends Twig_Template
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
        $__internal_395adbb5660cae988144735819b7693b9b893b9c9681f78c269d576c801b13d5 = $this->env->getExtension("native_profiler");
        $__internal_395adbb5660cae988144735819b7693b9b893b9c9681f78c269d576c801b13d5->enter($__internal_395adbb5660cae988144735819b7693b9b893b9c9681f78c269d576c801b13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:form.html.twig"));

        // line 2
        echo "
  ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_395adbb5660cae988144735819b7693b9b893b9c9681f78c269d576c801b13d5->leave($__internal_395adbb5660cae988144735819b7693b9b893b9c9681f78c269d576c801b13d5_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:form.html.twig";
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
