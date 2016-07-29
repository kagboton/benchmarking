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
        $__internal_666f568d3cb370a589c75d2c6d081bc9d8a0b2968d3499991f915a3a7a8f7fc8 = $this->env->getExtension("native_profiler");
        $__internal_666f568d3cb370a589c75d2c6d081bc9d8a0b2968d3499991f915a3a7a8f7fc8->enter($__internal_666f568d3cb370a589c75d2c6d081bc9d8a0b2968d3499991f915a3a7a8f7fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666f568d3cb370a589c75d2c6d081bc9d8a0b2968d3499991f915a3a7a8f7fc8->leave($__internal_666f568d3cb370a589c75d2c6d081bc9d8a0b2968d3499991f915a3a7a8f7fc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_677d30cb34ecc42a77a5a177a07b64198c94483f105191e101a79a02ec77fc1c = $this->env->getExtension("native_profiler");
        $__internal_677d30cb34ecc42a77a5a177a07b64198c94483f105191e101a79a02ec77fc1c->enter($__internal_677d30cb34ecc42a77a5a177a07b64198c94483f105191e101a79a02ec77fc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_677d30cb34ecc42a77a5a177a07b64198c94483f105191e101a79a02ec77fc1c->leave($__internal_677d30cb34ecc42a77a5a177a07b64198c94483f105191e101a79a02ec77fc1c_prof);

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
