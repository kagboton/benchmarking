<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ebb1784561a6afbd11f97acc7f84ab842c69901fdf1292830c5befacb0e97b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b3bc65c7d3a4dd225132f738feec2c49bc599a84b9b7b8d7691bbf82d931ec3 = $this->env->getExtension("native_profiler");
        $__internal_2b3bc65c7d3a4dd225132f738feec2c49bc599a84b9b7b8d7691bbf82d931ec3->enter($__internal_2b3bc65c7d3a4dd225132f738feec2c49bc599a84b9b7b8d7691bbf82d931ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3bc65c7d3a4dd225132f738feec2c49bc599a84b9b7b8d7691bbf82d931ec3->leave($__internal_2b3bc65c7d3a4dd225132f738feec2c49bc599a84b9b7b8d7691bbf82d931ec3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b4ac2554046712d76cb5b296947f84f4cf7874dc5651640fa7fde73f83a37b2 = $this->env->getExtension("native_profiler");
        $__internal_9b4ac2554046712d76cb5b296947f84f4cf7874dc5651640fa7fde73f83a37b2->enter($__internal_9b4ac2554046712d76cb5b296947f84f4cf7874dc5651640fa7fde73f83a37b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9b4ac2554046712d76cb5b296947f84f4cf7874dc5651640fa7fde73f83a37b2->leave($__internal_9b4ac2554046712d76cb5b296947f84f4cf7874dc5651640fa7fde73f83a37b2_prof);

    }

    // line 7
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_1ac7652e18066b48b0a6b8453fed25527323037308433d3745dfc32e0ac22e76 = $this->env->getExtension("native_profiler");
        $__internal_1ac7652e18066b48b0a6b8453fed25527323037308433d3745dfc32e0ac22e76->enter($__internal_1ac7652e18066b48b0a6b8453fed25527323037308433d3745dfc32e0ac22e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 8
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_1ac7652e18066b48b0a6b8453fed25527323037308433d3745dfc32e0ac22e76->leave($__internal_1ac7652e18066b48b0a6b8453fed25527323037308433d3745dfc32e0ac22e76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Modifier profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/*     {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock admin_body %}*/
/* */
