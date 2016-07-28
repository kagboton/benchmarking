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
        $__internal_b90cc20121c8d1d2de40f8b52928e6bb8e1cebe3136198e6b961077e981b92d3 = $this->env->getExtension("native_profiler");
        $__internal_b90cc20121c8d1d2de40f8b52928e6bb8e1cebe3136198e6b961077e981b92d3->enter($__internal_b90cc20121c8d1d2de40f8b52928e6bb8e1cebe3136198e6b961077e981b92d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90cc20121c8d1d2de40f8b52928e6bb8e1cebe3136198e6b961077e981b92d3->leave($__internal_b90cc20121c8d1d2de40f8b52928e6bb8e1cebe3136198e6b961077e981b92d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_252e21341b3e36b2057b6d4fc27b35374622706696fa977a2e9f75f22fc8b092 = $this->env->getExtension("native_profiler");
        $__internal_252e21341b3e36b2057b6d4fc27b35374622706696fa977a2e9f75f22fc8b092->enter($__internal_252e21341b3e36b2057b6d4fc27b35374622706696fa977a2e9f75f22fc8b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_252e21341b3e36b2057b6d4fc27b35374622706696fa977a2e9f75f22fc8b092->leave($__internal_252e21341b3e36b2057b6d4fc27b35374622706696fa977a2e9f75f22fc8b092_prof);

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
