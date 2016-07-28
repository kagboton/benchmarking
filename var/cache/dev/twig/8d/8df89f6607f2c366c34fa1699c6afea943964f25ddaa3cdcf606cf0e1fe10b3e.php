<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_15d34d6b94b3263d6520671dea2d8d067ccefc416e809c2a0d1bba5d86931124 extends Twig_Template
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
        $__internal_49e9d49f01c17a9063f0d8e6b1126c16dada2e6b2a42388f453613adab711fd9 = $this->env->getExtension("native_profiler");
        $__internal_49e9d49f01c17a9063f0d8e6b1126c16dada2e6b2a42388f453613adab711fd9->enter($__internal_49e9d49f01c17a9063f0d8e6b1126c16dada2e6b2a42388f453613adab711fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_49e9d49f01c17a9063f0d8e6b1126c16dada2e6b2a42388f453613adab711fd9->leave($__internal_49e9d49f01c17a9063f0d8e6b1126c16dada2e6b2a42388f453613adab711fd9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
