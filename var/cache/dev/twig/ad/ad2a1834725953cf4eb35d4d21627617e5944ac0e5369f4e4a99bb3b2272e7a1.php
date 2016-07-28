<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_fceb9e18d6c10fe588cd71a3e05dac77a24b18e1ee10e54c914ef9de365e4c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef8a9e450ed7aff726024c1a2aec339b73865d982f91af6c4a2cb1a66991bfdb = $this->env->getExtension("native_profiler");
        $__internal_ef8a9e450ed7aff726024c1a2aec339b73865d982f91af6c4a2cb1a66991bfdb->enter($__internal_ef8a9e450ed7aff726024c1a2aec339b73865d982f91af6c4a2cb1a66991bfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef8a9e450ed7aff726024c1a2aec339b73865d982f91af6c4a2cb1a66991bfdb->leave($__internal_ef8a9e450ed7aff726024c1a2aec339b73865d982f91af6c4a2cb1a66991bfdb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_465d31b3fe74924d1cfe80b7ea69f54242c46b0e384b4f9158c3ecea4345c0fc = $this->env->getExtension("native_profiler");
        $__internal_465d31b3fe74924d1cfe80b7ea69f54242c46b0e384b4f9158c3ecea4345c0fc->enter($__internal_465d31b3fe74924d1cfe80b7ea69f54242c46b0e384b4f9158c3ecea4345c0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_465d31b3fe74924d1cfe80b7ea69f54242c46b0e384b4f9158c3ecea4345c0fc->leave($__internal_465d31b3fe74924d1cfe80b7ea69f54242c46b0e384b4f9158c3ecea4345c0fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
