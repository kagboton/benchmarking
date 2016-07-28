<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_2971421485b178f33dc1149afa702c79abd7e46ba2301feee94068ec604b6f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5531550a51bb86316b40ee09fcce75c42c5a398b07f9c76516110a255e5cb195 = $this->env->getExtension("native_profiler");
        $__internal_5531550a51bb86316b40ee09fcce75c42c5a398b07f9c76516110a255e5cb195->enter($__internal_5531550a51bb86316b40ee09fcce75c42c5a398b07f9c76516110a255e5cb195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5531550a51bb86316b40ee09fcce75c42c5a398b07f9c76516110a255e5cb195->leave($__internal_5531550a51bb86316b40ee09fcce75c42c5a398b07f9c76516110a255e5cb195_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5f64a43ad798a77b894ae4c3d7a2da5364311db1f97cdc2d28261b89d112b60 = $this->env->getExtension("native_profiler");
        $__internal_c5f64a43ad798a77b894ae4c3d7a2da5364311db1f97cdc2d28261b89d112b60->enter($__internal_c5f64a43ad798a77b894ae4c3d7a2da5364311db1f97cdc2d28261b89d112b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c5f64a43ad798a77b894ae4c3d7a2da5364311db1f97cdc2d28261b89d112b60->leave($__internal_c5f64a43ad798a77b894ae4c3d7a2da5364311db1f97cdc2d28261b89d112b60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
