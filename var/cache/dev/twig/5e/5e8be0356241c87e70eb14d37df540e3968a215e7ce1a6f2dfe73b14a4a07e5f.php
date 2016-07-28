<?php

/* @Benchmarking/Default/FonctionExistante/form.html.twig */
class __TwigTemplate_30313b452fe7c5c5e41ce399c76f4a394f319cd10edf3f66aa2fea2b345b28ed extends Twig_Template
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
        $__internal_daaca72195c92e099b000c51e842cb5ca1e6fbcc5dd8c5dc00a6dce4b6afb783 = $this->env->getExtension("native_profiler");
        $__internal_daaca72195c92e099b000c51e842cb5ca1e6fbcc5dd8c5dc00a6dce4b6afb783->enter($__internal_daaca72195c92e099b000c51e842cb5ca1e6fbcc5dd8c5dc00a6dce4b6afb783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/form.html.twig"));

        // line 2
        echo "
  ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_daaca72195c92e099b000c51e842cb5ca1e6fbcc5dd8c5dc00a6dce4b6afb783->leave($__internal_daaca72195c92e099b000c51e842cb5ca1e6fbcc5dd8c5dc00a6dce4b6afb783_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FonctionExistante/form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/FonctionExistante/form.html.twig #}*/
/* */
/*   {{ form(form) }}*/
/* */
/* */
