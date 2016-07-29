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
        $__internal_4394513337ba9a3f62cc969321895bd5c229b09ad9670a63243f2f2cc6cc19fb = $this->env->getExtension("native_profiler");
        $__internal_4394513337ba9a3f62cc969321895bd5c229b09ad9670a63243f2f2cc6cc19fb->enter($__internal_4394513337ba9a3f62cc969321895bd5c229b09ad9670a63243f2f2cc6cc19fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4394513337ba9a3f62cc969321895bd5c229b09ad9670a63243f2f2cc6cc19fb->leave($__internal_4394513337ba9a3f62cc969321895bd5c229b09ad9670a63243f2f2cc6cc19fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e16a96fe5007f749e4365233bf2a45b1472e3474e19ccd97163f326f6c96325e = $this->env->getExtension("native_profiler");
        $__internal_e16a96fe5007f749e4365233bf2a45b1472e3474e19ccd97163f326f6c96325e->enter($__internal_e16a96fe5007f749e4365233bf2a45b1472e3474e19ccd97163f326f6c96325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e16a96fe5007f749e4365233bf2a45b1472e3474e19ccd97163f326f6c96325e->leave($__internal_e16a96fe5007f749e4365233bf2a45b1472e3474e19ccd97163f326f6c96325e_prof);

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
