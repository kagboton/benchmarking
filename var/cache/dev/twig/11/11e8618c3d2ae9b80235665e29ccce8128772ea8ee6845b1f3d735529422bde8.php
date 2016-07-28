<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c5c6140096208693b5b234e23b075f6bd8d3820ac043b3c60d7df30704fad7d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_59418feac320e90ca0273805823d53ef1c3b980683e2a1cb732f7fdf00e9c96b = $this->env->getExtension("native_profiler");
        $__internal_59418feac320e90ca0273805823d53ef1c3b980683e2a1cb732f7fdf00e9c96b->enter($__internal_59418feac320e90ca0273805823d53ef1c3b980683e2a1cb732f7fdf00e9c96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59418feac320e90ca0273805823d53ef1c3b980683e2a1cb732f7fdf00e9c96b->leave($__internal_59418feac320e90ca0273805823d53ef1c3b980683e2a1cb732f7fdf00e9c96b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa47a339fb8161f07f4b5f94f8b38d0248bde7b9d6387df108e6761ea1800c47 = $this->env->getExtension("native_profiler");
        $__internal_fa47a339fb8161f07f4b5f94f8b38d0248bde7b9d6387df108e6761ea1800c47->enter($__internal_fa47a339fb8161f07f4b5f94f8b38d0248bde7b9d6387df108e6761ea1800c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_fa47a339fb8161f07f4b5f94f8b38d0248bde7b9d6387df108e6761ea1800c47->leave($__internal_fa47a339fb8161f07f4b5f94f8b38d0248bde7b9d6387df108e6761ea1800c47_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
