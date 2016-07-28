<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_56c0b8213218a50e2fb758c28f9b14de55186022bc370eac3a3475eb3ce619d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ab3b7434ea4c66bdf66a742824e12cc333b0b2d45fc31fc486c98e76fdf5a1c7 = $this->env->getExtension("native_profiler");
        $__internal_ab3b7434ea4c66bdf66a742824e12cc333b0b2d45fc31fc486c98e76fdf5a1c7->enter($__internal_ab3b7434ea4c66bdf66a742824e12cc333b0b2d45fc31fc486c98e76fdf5a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3b7434ea4c66bdf66a742824e12cc333b0b2d45fc31fc486c98e76fdf5a1c7->leave($__internal_ab3b7434ea4c66bdf66a742824e12cc333b0b2d45fc31fc486c98e76fdf5a1c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8d932f36e8e24209535a326967f6a372bb4ce9e7b2a93bf0a188c9d37193c92 = $this->env->getExtension("native_profiler");
        $__internal_c8d932f36e8e24209535a326967f6a372bb4ce9e7b2a93bf0a188c9d37193c92->enter($__internal_c8d932f36e8e24209535a326967f6a372bb4ce9e7b2a93bf0a188c9d37193c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c8d932f36e8e24209535a326967f6a372bb4ce9e7b2a93bf0a188c9d37193c92->leave($__internal_c8d932f36e8e24209535a326967f6a372bb4ce9e7b2a93bf0a188c9d37193c92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
