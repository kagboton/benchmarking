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
        $__internal_a84b429f5020953b8b2f8cc0c11d9bf4ea611777bcf8fda56fa0efa013b6de28 = $this->env->getExtension("native_profiler");
        $__internal_a84b429f5020953b8b2f8cc0c11d9bf4ea611777bcf8fda56fa0efa013b6de28->enter($__internal_a84b429f5020953b8b2f8cc0c11d9bf4ea611777bcf8fda56fa0efa013b6de28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a84b429f5020953b8b2f8cc0c11d9bf4ea611777bcf8fda56fa0efa013b6de28->leave($__internal_a84b429f5020953b8b2f8cc0c11d9bf4ea611777bcf8fda56fa0efa013b6de28_prof);

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
