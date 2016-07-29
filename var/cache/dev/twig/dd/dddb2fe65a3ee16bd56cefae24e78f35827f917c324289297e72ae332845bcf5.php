<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_447535b005eb1d35ae657c97a6b9ccadd5c0f67e4f13e6f2c3e2ae075b4b0d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1214b2fd71f1cdcde0fc13c27b7cc8a9c6df53d3eeb0bf91c0e249ba7c8134e6 = $this->env->getExtension("native_profiler");
        $__internal_1214b2fd71f1cdcde0fc13c27b7cc8a9c6df53d3eeb0bf91c0e249ba7c8134e6->enter($__internal_1214b2fd71f1cdcde0fc13c27b7cc8a9c6df53d3eeb0bf91c0e249ba7c8134e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1214b2fd71f1cdcde0fc13c27b7cc8a9c6df53d3eeb0bf91c0e249ba7c8134e6->leave($__internal_1214b2fd71f1cdcde0fc13c27b7cc8a9c6df53d3eeb0bf91c0e249ba7c8134e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c5ed992aaac653e4fd9f14b85b607d37ce78ab638e6f72c2f208208d5c34f4e = $this->env->getExtension("native_profiler");
        $__internal_3c5ed992aaac653e4fd9f14b85b607d37ce78ab638e6f72c2f208208d5c34f4e->enter($__internal_3c5ed992aaac653e4fd9f14b85b607d37ce78ab638e6f72c2f208208d5c34f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3c5ed992aaac653e4fd9f14b85b607d37ce78ab638e6f72c2f208208d5c34f4e->leave($__internal_3c5ed992aaac653e4fd9f14b85b607d37ce78ab638e6f72c2f208208d5c34f4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
