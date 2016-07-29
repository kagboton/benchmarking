<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7b1fd38643210d3f3f6f1f9f1aa602ed76c4d56281cd282663404d37ea708b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_d7c295c08e77c84dfc90a87ae5f63f0c1d4f77b0425a1b6c69610f4af6b9a8dc = $this->env->getExtension("native_profiler");
        $__internal_d7c295c08e77c84dfc90a87ae5f63f0c1d4f77b0425a1b6c69610f4af6b9a8dc->enter($__internal_d7c295c08e77c84dfc90a87ae5f63f0c1d4f77b0425a1b6c69610f4af6b9a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c295c08e77c84dfc90a87ae5f63f0c1d4f77b0425a1b6c69610f4af6b9a8dc->leave($__internal_d7c295c08e77c84dfc90a87ae5f63f0c1d4f77b0425a1b6c69610f4af6b9a8dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b3e680982f2c2fc212abdb88f45f92ac7f2754f526d83a535c451d0322f23b2 = $this->env->getExtension("native_profiler");
        $__internal_6b3e680982f2c2fc212abdb88f45f92ac7f2754f526d83a535c451d0322f23b2->enter($__internal_6b3e680982f2c2fc212abdb88f45f92ac7f2754f526d83a535c451d0322f23b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_6b3e680982f2c2fc212abdb88f45f92ac7f2754f526d83a535c451d0322f23b2->leave($__internal_6b3e680982f2c2fc212abdb88f45f92ac7f2754f526d83a535c451d0322f23b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
