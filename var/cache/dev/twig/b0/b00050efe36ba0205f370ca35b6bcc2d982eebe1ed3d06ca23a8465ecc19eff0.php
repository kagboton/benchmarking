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
        $__internal_5ad55b5e6c2792972a8195198cd6f49baac0ca14578a698ebd5d327db4548436 = $this->env->getExtension("native_profiler");
        $__internal_5ad55b5e6c2792972a8195198cd6f49baac0ca14578a698ebd5d327db4548436->enter($__internal_5ad55b5e6c2792972a8195198cd6f49baac0ca14578a698ebd5d327db4548436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ad55b5e6c2792972a8195198cd6f49baac0ca14578a698ebd5d327db4548436->leave($__internal_5ad55b5e6c2792972a8195198cd6f49baac0ca14578a698ebd5d327db4548436_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_380020468eba4e5f63974deb05c446f1d1f4809445fe38566ab5d71452caff5e = $this->env->getExtension("native_profiler");
        $__internal_380020468eba4e5f63974deb05c446f1d1f4809445fe38566ab5d71452caff5e->enter($__internal_380020468eba4e5f63974deb05c446f1d1f4809445fe38566ab5d71452caff5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_380020468eba4e5f63974deb05c446f1d1f4809445fe38566ab5d71452caff5e->leave($__internal_380020468eba4e5f63974deb05c446f1d1f4809445fe38566ab5d71452caff5e_prof);

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
