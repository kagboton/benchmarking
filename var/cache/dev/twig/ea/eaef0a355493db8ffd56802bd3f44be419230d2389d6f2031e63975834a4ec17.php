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
        $__internal_9a93263ad2bdfcac50cf0b08cc947f8b287a387d35028a93795a1aaa7a424d3c = $this->env->getExtension("native_profiler");
        $__internal_9a93263ad2bdfcac50cf0b08cc947f8b287a387d35028a93795a1aaa7a424d3c->enter($__internal_9a93263ad2bdfcac50cf0b08cc947f8b287a387d35028a93795a1aaa7a424d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a93263ad2bdfcac50cf0b08cc947f8b287a387d35028a93795a1aaa7a424d3c->leave($__internal_9a93263ad2bdfcac50cf0b08cc947f8b287a387d35028a93795a1aaa7a424d3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9814c03cd32d64202d1e5ce6fb51775f993ad1e952da54194ac4235e0ba88de5 = $this->env->getExtension("native_profiler");
        $__internal_9814c03cd32d64202d1e5ce6fb51775f993ad1e952da54194ac4235e0ba88de5->enter($__internal_9814c03cd32d64202d1e5ce6fb51775f993ad1e952da54194ac4235e0ba88de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9814c03cd32d64202d1e5ce6fb51775f993ad1e952da54194ac4235e0ba88de5->leave($__internal_9814c03cd32d64202d1e5ce6fb51775f993ad1e952da54194ac4235e0ba88de5_prof);

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
