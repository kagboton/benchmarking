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
        $__internal_e251f54eeebe0b35360ff9b29be92201c684f82c9f6252e3a075cc1304ae0d3d = $this->env->getExtension("native_profiler");
        $__internal_e251f54eeebe0b35360ff9b29be92201c684f82c9f6252e3a075cc1304ae0d3d->enter($__internal_e251f54eeebe0b35360ff9b29be92201c684f82c9f6252e3a075cc1304ae0d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e251f54eeebe0b35360ff9b29be92201c684f82c9f6252e3a075cc1304ae0d3d->leave($__internal_e251f54eeebe0b35360ff9b29be92201c684f82c9f6252e3a075cc1304ae0d3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac69e52df9f5a1059a8fa63f6a23fd8197d3032c47c799e381d11bd1a2c25d46 = $this->env->getExtension("native_profiler");
        $__internal_ac69e52df9f5a1059a8fa63f6a23fd8197d3032c47c799e381d11bd1a2c25d46->enter($__internal_ac69e52df9f5a1059a8fa63f6a23fd8197d3032c47c799e381d11bd1a2c25d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ac69e52df9f5a1059a8fa63f6a23fd8197d3032c47c799e381d11bd1a2c25d46->leave($__internal_ac69e52df9f5a1059a8fa63f6a23fd8197d3032c47c799e381d11bd1a2c25d46_prof);

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
