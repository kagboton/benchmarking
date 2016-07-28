<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_df61f7e5893b362b7f7da6c9819cb6790989a8bfac332a4113220a11706de688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a42234cff856ce54bc41ea0a8148899f3313418177dac3607cd3553803518f0a = $this->env->getExtension("native_profiler");
        $__internal_a42234cff856ce54bc41ea0a8148899f3313418177dac3607cd3553803518f0a->enter($__internal_a42234cff856ce54bc41ea0a8148899f3313418177dac3607cd3553803518f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a42234cff856ce54bc41ea0a8148899f3313418177dac3607cd3553803518f0a->leave($__internal_a42234cff856ce54bc41ea0a8148899f3313418177dac3607cd3553803518f0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f0802c199fe01c378593da139ff8da4367a37ba5509349e4bc613567ae03c33 = $this->env->getExtension("native_profiler");
        $__internal_6f0802c199fe01c378593da139ff8da4367a37ba5509349e4bc613567ae03c33->enter($__internal_6f0802c199fe01c378593da139ff8da4367a37ba5509349e4bc613567ae03c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6f0802c199fe01c378593da139ff8da4367a37ba5509349e4bc613567ae03c33->leave($__internal_6f0802c199fe01c378593da139ff8da4367a37ba5509349e4bc613567ae03c33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
