<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3a402c6d83432d59c8c8cf6a13f5fdd317e219d6928b4e73fab13d93d96a8d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_afef4b19497c42d1978d5e86817a45da7aae09ba8376f304ad5ae1ad972c332a = $this->env->getExtension("native_profiler");
        $__internal_afef4b19497c42d1978d5e86817a45da7aae09ba8376f304ad5ae1ad972c332a->enter($__internal_afef4b19497c42d1978d5e86817a45da7aae09ba8376f304ad5ae1ad972c332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afef4b19497c42d1978d5e86817a45da7aae09ba8376f304ad5ae1ad972c332a->leave($__internal_afef4b19497c42d1978d5e86817a45da7aae09ba8376f304ad5ae1ad972c332a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c615754795006d2b47e79eb0f140220eeb28600573820d26256363d2e95ac743 = $this->env->getExtension("native_profiler");
        $__internal_c615754795006d2b47e79eb0f140220eeb28600573820d26256363d2e95ac743->enter($__internal_c615754795006d2b47e79eb0f140220eeb28600573820d26256363d2e95ac743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c615754795006d2b47e79eb0f140220eeb28600573820d26256363d2e95ac743->leave($__internal_c615754795006d2b47e79eb0f140220eeb28600573820d26256363d2e95ac743_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
