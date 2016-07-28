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
        $__internal_59d9c0eb9adce5df68d60bf27558d85903a88b85fdb74122a80fd79bf190c78b = $this->env->getExtension("native_profiler");
        $__internal_59d9c0eb9adce5df68d60bf27558d85903a88b85fdb74122a80fd79bf190c78b->enter($__internal_59d9c0eb9adce5df68d60bf27558d85903a88b85fdb74122a80fd79bf190c78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59d9c0eb9adce5df68d60bf27558d85903a88b85fdb74122a80fd79bf190c78b->leave($__internal_59d9c0eb9adce5df68d60bf27558d85903a88b85fdb74122a80fd79bf190c78b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_092a3c12ca30c0a72fb19596cf63ef8ca8adb36a50765de085deef983df129c6 = $this->env->getExtension("native_profiler");
        $__internal_092a3c12ca30c0a72fb19596cf63ef8ca8adb36a50765de085deef983df129c6->enter($__internal_092a3c12ca30c0a72fb19596cf63ef8ca8adb36a50765de085deef983df129c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_092a3c12ca30c0a72fb19596cf63ef8ca8adb36a50765de085deef983df129c6->leave($__internal_092a3c12ca30c0a72fb19596cf63ef8ca8adb36a50765de085deef983df129c6_prof);

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
