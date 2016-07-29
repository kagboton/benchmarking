<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1fb7eeaabc3283ffe27ee4a7b48e1910bfcaa5b6c7e6f5fe3d11df11f1d61774 extends Twig_Template
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
        $__internal_fffdcd85f9c801c3e9af6c4e299b1a151ee884144751486cb07f3a44be2fab62 = $this->env->getExtension("native_profiler");
        $__internal_fffdcd85f9c801c3e9af6c4e299b1a151ee884144751486cb07f3a44be2fab62->enter($__internal_fffdcd85f9c801c3e9af6c4e299b1a151ee884144751486cb07f3a44be2fab62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fffdcd85f9c801c3e9af6c4e299b1a151ee884144751486cb07f3a44be2fab62->leave($__internal_fffdcd85f9c801c3e9af6c4e299b1a151ee884144751486cb07f3a44be2fab62_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
