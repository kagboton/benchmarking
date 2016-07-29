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
        $__internal_09615f3c02d09b77d83407a8ca3e1356ee878e93add928a711a75f750b84ad56 = $this->env->getExtension("native_profiler");
        $__internal_09615f3c02d09b77d83407a8ca3e1356ee878e93add928a711a75f750b84ad56->enter($__internal_09615f3c02d09b77d83407a8ca3e1356ee878e93add928a711a75f750b84ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09615f3c02d09b77d83407a8ca3e1356ee878e93add928a711a75f750b84ad56->leave($__internal_09615f3c02d09b77d83407a8ca3e1356ee878e93add928a711a75f750b84ad56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de3dffc58cdbc82074b5f01a5c2139c1ba120f85f4067d898ea73700e3d1f343 = $this->env->getExtension("native_profiler");
        $__internal_de3dffc58cdbc82074b5f01a5c2139c1ba120f85f4067d898ea73700e3d1f343->enter($__internal_de3dffc58cdbc82074b5f01a5c2139c1ba120f85f4067d898ea73700e3d1f343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_de3dffc58cdbc82074b5f01a5c2139c1ba120f85f4067d898ea73700e3d1f343->leave($__internal_de3dffc58cdbc82074b5f01a5c2139c1ba120f85f4067d898ea73700e3d1f343_prof);

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
