<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3444dbbafb5db6e05d77702cbb247c985d4daf9191f93169d384b4ecf7777f43 extends Twig_Template
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
        $__internal_3a7423ef62ec3a8ce4b500f9e7dc61328f7f2e37878a59bba20d77321abdadd7 = $this->env->getExtension("native_profiler");
        $__internal_3a7423ef62ec3a8ce4b500f9e7dc61328f7f2e37878a59bba20d77321abdadd7->enter($__internal_3a7423ef62ec3a8ce4b500f9e7dc61328f7f2e37878a59bba20d77321abdadd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3a7423ef62ec3a8ce4b500f9e7dc61328f7f2e37878a59bba20d77321abdadd7->leave($__internal_3a7423ef62ec3a8ce4b500f9e7dc61328f7f2e37878a59bba20d77321abdadd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
