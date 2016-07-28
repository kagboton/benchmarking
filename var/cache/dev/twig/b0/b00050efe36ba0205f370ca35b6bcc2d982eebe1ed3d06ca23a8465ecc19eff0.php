<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0e4f25345977f8ad27c545d5432d237c6fc648a155274636f8a82c1899b0f47c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_aa5ec4c84bd0407a899380ecd5a9682d5f4d0c9ecfd9658dbcc39f1f2cb4a58e = $this->env->getExtension("native_profiler");
        $__internal_aa5ec4c84bd0407a899380ecd5a9682d5f4d0c9ecfd9658dbcc39f1f2cb4a58e->enter($__internal_aa5ec4c84bd0407a899380ecd5a9682d5f4d0c9ecfd9658dbcc39f1f2cb4a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa5ec4c84bd0407a899380ecd5a9682d5f4d0c9ecfd9658dbcc39f1f2cb4a58e->leave($__internal_aa5ec4c84bd0407a899380ecd5a9682d5f4d0c9ecfd9658dbcc39f1f2cb4a58e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66332e32c99fe0c7228fdd80460146cb9ef75c43025be08a18658d91d41f2f56 = $this->env->getExtension("native_profiler");
        $__internal_66332e32c99fe0c7228fdd80460146cb9ef75c43025be08a18658d91d41f2f56->enter($__internal_66332e32c99fe0c7228fdd80460146cb9ef75c43025be08a18658d91d41f2f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_66332e32c99fe0c7228fdd80460146cb9ef75c43025be08a18658d91d41f2f56->leave($__internal_66332e32c99fe0c7228fdd80460146cb9ef75c43025be08a18658d91d41f2f56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
