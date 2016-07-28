<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0d761a8aa9f226d18c0ed106727683fc1f7ab6a72a30c5b9ece68881799d5799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_5de1781ec0221540c7a91a42d4603be9907f2e9973c65fb9163c867af516d59b = $this->env->getExtension("native_profiler");
        $__internal_5de1781ec0221540c7a91a42d4603be9907f2e9973c65fb9163c867af516d59b->enter($__internal_5de1781ec0221540c7a91a42d4603be9907f2e9973c65fb9163c867af516d59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de1781ec0221540c7a91a42d4603be9907f2e9973c65fb9163c867af516d59b->leave($__internal_5de1781ec0221540c7a91a42d4603be9907f2e9973c65fb9163c867af516d59b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_568ea2acdb776a7a0126f9c6549ce23c739be59094a28c291701a9bebe8565c7 = $this->env->getExtension("native_profiler");
        $__internal_568ea2acdb776a7a0126f9c6549ce23c739be59094a28c291701a9bebe8565c7->enter($__internal_568ea2acdb776a7a0126f9c6549ce23c739be59094a28c291701a9bebe8565c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_568ea2acdb776a7a0126f9c6549ce23c739be59094a28c291701a9bebe8565c7->leave($__internal_568ea2acdb776a7a0126f9c6549ce23c739be59094a28c291701a9bebe8565c7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
