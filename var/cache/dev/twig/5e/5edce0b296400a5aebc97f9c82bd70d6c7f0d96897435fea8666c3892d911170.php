<?php

/* BenchmarkingBundle:Default/TypeTdB:form.html.twig */
class __TwigTemplate_254e5f5aafcf2ba34e363d0d1503e09be1d8cfd967ee9b461ecaa8928055aa77 extends Twig_Template
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
        $__internal_6d6c8b56568e49e7ff840f0e39d4f4a954c3c622a2bb0dfda583d8f865054567 = $this->env->getExtension("native_profiler");
        $__internal_6d6c8b56568e49e7ff840f0e39d4f4a954c3c622a2bb0dfda583d8f865054567->enter($__internal_6d6c8b56568e49e7ff840f0e39d4f4a954c3c622a2bb0dfda583d8f865054567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:form.html.twig"));

        // line 2
        echo "

";
        // line 6
        echo "<div class=\"well\">
  ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_6d6c8b56568e49e7ff840f0e39d4f4a954c3c622a2bb0dfda583d8f865054567->leave($__internal_6d6c8b56568e49e7ff840f0e39d4f4a954c3c622a2bb0dfda583d8f865054567_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeTdB:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  26 => 6,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeTdB/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
