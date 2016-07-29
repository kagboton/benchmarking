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
        $__internal_460c29d18b058c6167c6cf6c9acf89d358684f885124422f985f263fb17cb2c1 = $this->env->getExtension("native_profiler");
        $__internal_460c29d18b058c6167c6cf6c9acf89d358684f885124422f985f263fb17cb2c1->enter($__internal_460c29d18b058c6167c6cf6c9acf89d358684f885124422f985f263fb17cb2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_460c29d18b058c6167c6cf6c9acf89d358684f885124422f985f263fb17cb2c1->leave($__internal_460c29d18b058c6167c6cf6c9acf89d358684f885124422f985f263fb17cb2c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f66d6611422e6c0bfe054523a3f88c072015ad93ba468b26c9b5b85d6e951f29 = $this->env->getExtension("native_profiler");
        $__internal_f66d6611422e6c0bfe054523a3f88c072015ad93ba468b26c9b5b85d6e951f29->enter($__internal_f66d6611422e6c0bfe054523a3f88c072015ad93ba468b26c9b5b85d6e951f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f66d6611422e6c0bfe054523a3f88c072015ad93ba468b26c9b5b85d6e951f29->leave($__internal_f66d6611422e6c0bfe054523a3f88c072015ad93ba468b26c9b5b85d6e951f29_prof);

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
