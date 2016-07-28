<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_2dbb93d89a54b2da0a0ca4059d8ef5c522776c9d29221b44c2652e8b1c223a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2bda108cbbac27c11d418f9da10613547a7588d0a5baf1858f3cb45d4f71d989 = $this->env->getExtension("native_profiler");
        $__internal_2bda108cbbac27c11d418f9da10613547a7588d0a5baf1858f3cb45d4f71d989->enter($__internal_2bda108cbbac27c11d418f9da10613547a7588d0a5baf1858f3cb45d4f71d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bda108cbbac27c11d418f9da10613547a7588d0a5baf1858f3cb45d4f71d989->leave($__internal_2bda108cbbac27c11d418f9da10613547a7588d0a5baf1858f3cb45d4f71d989_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_010d12a4609fddb8a11ac4140a9bb7cb0fbd47eb1e5cb6f1b8a3677ee14f365d = $this->env->getExtension("native_profiler");
        $__internal_010d12a4609fddb8a11ac4140a9bb7cb0fbd47eb1e5cb6f1b8a3677ee14f365d->enter($__internal_010d12a4609fddb8a11ac4140a9bb7cb0fbd47eb1e5cb6f1b8a3677ee14f365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_010d12a4609fddb8a11ac4140a9bb7cb0fbd47eb1e5cb6f1b8a3677ee14f365d->leave($__internal_010d12a4609fddb8a11ac4140a9bb7cb0fbd47eb1e5cb6f1b8a3677ee14f365d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
