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
        $__internal_6c27aa5e47db99049cc8f79dace83b5a3c21a5c7602b89231dc094ca8226f768 = $this->env->getExtension("native_profiler");
        $__internal_6c27aa5e47db99049cc8f79dace83b5a3c21a5c7602b89231dc094ca8226f768->enter($__internal_6c27aa5e47db99049cc8f79dace83b5a3c21a5c7602b89231dc094ca8226f768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c27aa5e47db99049cc8f79dace83b5a3c21a5c7602b89231dc094ca8226f768->leave($__internal_6c27aa5e47db99049cc8f79dace83b5a3c21a5c7602b89231dc094ca8226f768_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f118b46b4b5144416330a14f713fa1656d784eb1a98a7eac7076b1f0822de8b8 = $this->env->getExtension("native_profiler");
        $__internal_f118b46b4b5144416330a14f713fa1656d784eb1a98a7eac7076b1f0822de8b8->enter($__internal_f118b46b4b5144416330a14f713fa1656d784eb1a98a7eac7076b1f0822de8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f118b46b4b5144416330a14f713fa1656d784eb1a98a7eac7076b1f0822de8b8->leave($__internal_f118b46b4b5144416330a14f713fa1656d784eb1a98a7eac7076b1f0822de8b8_prof);

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
