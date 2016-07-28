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
        $__internal_04c62ecd2b0e4d641da21121b262a77f9b01c98b30ffbbef19921def802de486 = $this->env->getExtension("native_profiler");
        $__internal_04c62ecd2b0e4d641da21121b262a77f9b01c98b30ffbbef19921def802de486->enter($__internal_04c62ecd2b0e4d641da21121b262a77f9b01c98b30ffbbef19921def802de486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_04c62ecd2b0e4d641da21121b262a77f9b01c98b30ffbbef19921def802de486->leave($__internal_04c62ecd2b0e4d641da21121b262a77f9b01c98b30ffbbef19921def802de486_prof);

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
