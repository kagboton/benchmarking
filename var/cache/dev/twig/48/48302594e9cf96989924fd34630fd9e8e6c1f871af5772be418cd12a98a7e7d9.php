<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9977a89bab148c578bbcfb455db6a5007bfeb6295890422c7bacb552fbedc38e extends Twig_Template
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
        $__internal_29d43b542d157c08f1489b2b6bb61ddb08ffbaed8e869bc1830f6cfe8633214e = $this->env->getExtension("native_profiler");
        $__internal_29d43b542d157c08f1489b2b6bb61ddb08ffbaed8e869bc1830f6cfe8633214e->enter($__internal_29d43b542d157c08f1489b2b6bb61ddb08ffbaed8e869bc1830f6cfe8633214e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_29d43b542d157c08f1489b2b6bb61ddb08ffbaed8e869bc1830f6cfe8633214e->leave($__internal_29d43b542d157c08f1489b2b6bb61ddb08ffbaed8e869bc1830f6cfe8633214e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
