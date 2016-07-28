<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b007bb7b3363ae0a3b1d20220ab7dacc7b9b6226b766519476d1e14d15f6555b extends Twig_Template
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
        $__internal_7bba038e8bddcb98317b0cd8d09af6637821a8feb25896ce6ccd9de2c3e9f4a0 = $this->env->getExtension("native_profiler");
        $__internal_7bba038e8bddcb98317b0cd8d09af6637821a8feb25896ce6ccd9de2c3e9f4a0->enter($__internal_7bba038e8bddcb98317b0cd8d09af6637821a8feb25896ce6ccd9de2c3e9f4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7bba038e8bddcb98317b0cd8d09af6637821a8feb25896ce6ccd9de2c3e9f4a0->leave($__internal_7bba038e8bddcb98317b0cd8d09af6637821a8feb25896ce6ccd9de2c3e9f4a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
