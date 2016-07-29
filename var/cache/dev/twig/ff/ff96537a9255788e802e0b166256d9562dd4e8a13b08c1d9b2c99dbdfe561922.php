<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_6df50370b5506914ae83480d0c04d1719eafefe927c28025ea94a4cca59247c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_7c480a0a5ecab9e9ac7a8dea6e9f530d6ad50fe61f6acc184db1d1c5fdbcb009 = $this->env->getExtension("native_profiler");
        $__internal_7c480a0a5ecab9e9ac7a8dea6e9f530d6ad50fe61f6acc184db1d1c5fdbcb009->enter($__internal_7c480a0a5ecab9e9ac7a8dea6e9f530d6ad50fe61f6acc184db1d1c5fdbcb009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c480a0a5ecab9e9ac7a8dea6e9f530d6ad50fe61f6acc184db1d1c5fdbcb009->leave($__internal_7c480a0a5ecab9e9ac7a8dea6e9f530d6ad50fe61f6acc184db1d1c5fdbcb009_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1dd7a704a1bc360fb6d37e9323e5a1f82201522986e2019b1c429e6854b80d9 = $this->env->getExtension("native_profiler");
        $__internal_f1dd7a704a1bc360fb6d37e9323e5a1f82201522986e2019b1c429e6854b80d9->enter($__internal_f1dd7a704a1bc360fb6d37e9323e5a1f82201522986e2019b1c429e6854b80d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_f1dd7a704a1bc360fb6d37e9323e5a1f82201522986e2019b1c429e6854b80d9->leave($__internal_f1dd7a704a1bc360fb6d37e9323e5a1f82201522986e2019b1c429e6854b80d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
