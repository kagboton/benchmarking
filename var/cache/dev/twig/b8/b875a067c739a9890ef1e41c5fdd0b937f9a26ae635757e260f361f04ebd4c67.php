<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8d5d1efefd9c87c8c6cf81805ccac6019f0d870d40ceb78bac23afbe947d929a extends Twig_Template
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
        $__internal_869d299a460d962bfb8d86101f3fbc4586aeb41ca89e48444e6704448f4545de = $this->env->getExtension("native_profiler");
        $__internal_869d299a460d962bfb8d86101f3fbc4586aeb41ca89e48444e6704448f4545de->enter($__internal_869d299a460d962bfb8d86101f3fbc4586aeb41ca89e48444e6704448f4545de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_869d299a460d962bfb8d86101f3fbc4586aeb41ca89e48444e6704448f4545de->leave($__internal_869d299a460d962bfb8d86101f3fbc4586aeb41ca89e48444e6704448f4545de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
