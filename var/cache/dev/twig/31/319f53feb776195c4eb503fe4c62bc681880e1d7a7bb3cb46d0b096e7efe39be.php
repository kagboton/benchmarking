<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9c8f21856028dd7b872bd7f51e5d4e1df10ca7ecc0bec66da5ec4d0bab0da7fa extends Twig_Template
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
        $__internal_250ccd7833e1fd71b24f92fa24da3e5d8c16defde335cbd3b3665c9f9c58a9ac = $this->env->getExtension("native_profiler");
        $__internal_250ccd7833e1fd71b24f92fa24da3e5d8c16defde335cbd3b3665c9f9c58a9ac->enter($__internal_250ccd7833e1fd71b24f92fa24da3e5d8c16defde335cbd3b3665c9f9c58a9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_250ccd7833e1fd71b24f92fa24da3e5d8c16defde335cbd3b3665c9f9c58a9ac->leave($__internal_250ccd7833e1fd71b24f92fa24da3e5d8c16defde335cbd3b3665c9f9c58a9ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
