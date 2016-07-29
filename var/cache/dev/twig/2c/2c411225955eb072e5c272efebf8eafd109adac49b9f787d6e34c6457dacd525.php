<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_c631d2e530e958b8efa4524ec0c80f89ff0e88e58eae19d3c132dc84f5262937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ba5ec262d25a90cb6921d6ab1e63af65795417cc6d90c7555c6af128c87deabd = $this->env->getExtension("native_profiler");
        $__internal_ba5ec262d25a90cb6921d6ab1e63af65795417cc6d90c7555c6af128c87deabd->enter($__internal_ba5ec262d25a90cb6921d6ab1e63af65795417cc6d90c7555c6af128c87deabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5ec262d25a90cb6921d6ab1e63af65795417cc6d90c7555c6af128c87deabd->leave($__internal_ba5ec262d25a90cb6921d6ab1e63af65795417cc6d90c7555c6af128c87deabd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee204b35e18780e9c6676b62da9bc9f9b9e3e6620742aad78efd879f1b69f0d6 = $this->env->getExtension("native_profiler");
        $__internal_ee204b35e18780e9c6676b62da9bc9f9b9e3e6620742aad78efd879f1b69f0d6->enter($__internal_ee204b35e18780e9c6676b62da9bc9f9b9e3e6620742aad78efd879f1b69f0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ee204b35e18780e9c6676b62da9bc9f9b9e3e6620742aad78efd879f1b69f0d6->leave($__internal_ee204b35e18780e9c6676b62da9bc9f9b9e3e6620742aad78efd879f1b69f0d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
