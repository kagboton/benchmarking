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
        $__internal_205d94e8a0afbf3140d5effd60e4b4ba59eb9ca92a25f1ae91055800393a841d = $this->env->getExtension("native_profiler");
        $__internal_205d94e8a0afbf3140d5effd60e4b4ba59eb9ca92a25f1ae91055800393a841d->enter($__internal_205d94e8a0afbf3140d5effd60e4b4ba59eb9ca92a25f1ae91055800393a841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205d94e8a0afbf3140d5effd60e4b4ba59eb9ca92a25f1ae91055800393a841d->leave($__internal_205d94e8a0afbf3140d5effd60e4b4ba59eb9ca92a25f1ae91055800393a841d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_203a8af159f805a30e7e88127639a10d47bd541f8794655b360751f2d0a28f1a = $this->env->getExtension("native_profiler");
        $__internal_203a8af159f805a30e7e88127639a10d47bd541f8794655b360751f2d0a28f1a->enter($__internal_203a8af159f805a30e7e88127639a10d47bd541f8794655b360751f2d0a28f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_203a8af159f805a30e7e88127639a10d47bd541f8794655b360751f2d0a28f1a->leave($__internal_203a8af159f805a30e7e88127639a10d47bd541f8794655b360751f2d0a28f1a_prof);

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
