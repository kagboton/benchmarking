<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_bf5ba7c88c6451437f437f1d498f3b1343aae4ea94a5bad1215c85ca296c224d extends Twig_Template
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
        $__internal_9b47873d3f63a05fc30a654b678e80581f78ce268ac6d8c687b9c7873cd461d7 = $this->env->getExtension("native_profiler");
        $__internal_9b47873d3f63a05fc30a654b678e80581f78ce268ac6d8c687b9c7873cd461d7->enter($__internal_9b47873d3f63a05fc30a654b678e80581f78ce268ac6d8c687b9c7873cd461d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9b47873d3f63a05fc30a654b678e80581f78ce268ac6d8c687b9c7873cd461d7->leave($__internal_9b47873d3f63a05fc30a654b678e80581f78ce268ac6d8c687b9c7873cd461d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
