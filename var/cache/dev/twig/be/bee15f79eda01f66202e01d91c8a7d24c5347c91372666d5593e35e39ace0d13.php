<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f3ddaf201a08762a76630b23fe8ce29b189c90531a015bdfe01f6b20d025d19f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_29c6b5fc992de7b482419bab86275da412ed61c339e3d2c33d4d3e395b095f6d = $this->env->getExtension("native_profiler");
        $__internal_29c6b5fc992de7b482419bab86275da412ed61c339e3d2c33d4d3e395b095f6d->enter($__internal_29c6b5fc992de7b482419bab86275da412ed61c339e3d2c33d4d3e395b095f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c6b5fc992de7b482419bab86275da412ed61c339e3d2c33d4d3e395b095f6d->leave($__internal_29c6b5fc992de7b482419bab86275da412ed61c339e3d2c33d4d3e395b095f6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d89abc10fa25fa0b58573ec477d453aa3516afebabdc310f2596d86a0c890588 = $this->env->getExtension("native_profiler");
        $__internal_d89abc10fa25fa0b58573ec477d453aa3516afebabdc310f2596d86a0c890588->enter($__internal_d89abc10fa25fa0b58573ec477d453aa3516afebabdc310f2596d86a0c890588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d89abc10fa25fa0b58573ec477d453aa3516afebabdc310f2596d86a0c890588->leave($__internal_d89abc10fa25fa0b58573ec477d453aa3516afebabdc310f2596d86a0c890588_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
