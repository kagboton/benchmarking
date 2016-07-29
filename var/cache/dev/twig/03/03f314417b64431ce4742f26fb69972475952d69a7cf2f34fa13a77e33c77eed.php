<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_381e51c39884f669f8378b7e50921d9238e9beae373b5d8953cc1f119cef7edb extends Twig_Template
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
        $__internal_f4e870e3b889c93b06c52521cf89ecb345e592215f9f2a72bb8ce8c2d05cb92c = $this->env->getExtension("native_profiler");
        $__internal_f4e870e3b889c93b06c52521cf89ecb345e592215f9f2a72bb8ce8c2d05cb92c->enter($__internal_f4e870e3b889c93b06c52521cf89ecb345e592215f9f2a72bb8ce8c2d05cb92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f4e870e3b889c93b06c52521cf89ecb345e592215f9f2a72bb8ce8c2d05cb92c->leave($__internal_f4e870e3b889c93b06c52521cf89ecb345e592215f9f2a72bb8ce8c2d05cb92c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
