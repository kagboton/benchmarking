<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_c88dc01f55e72f7e4362cbf0e9955d453c761e21b051ccdfb20222a48b0b5737 extends Twig_Template
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
        $__internal_6bbe985da2ca65542e993a05c46fa7323c8b7a5b685283c227b0348e7e4982b3 = $this->env->getExtension("native_profiler");
        $__internal_6bbe985da2ca65542e993a05c46fa7323c8b7a5b685283c227b0348e7e4982b3->enter($__internal_6bbe985da2ca65542e993a05c46fa7323c8b7a5b685283c227b0348e7e4982b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6bbe985da2ca65542e993a05c46fa7323c8b7a5b685283c227b0348e7e4982b3->leave($__internal_6bbe985da2ca65542e993a05c46fa7323c8b7a5b685283c227b0348e7e4982b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
