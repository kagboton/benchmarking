<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_91e70d3b770bd38b2424e5c690f6759bfa54257a708f3927f354911cba1c4c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_17c4983fecd1d21445e9a359f773286519eb537c5a3ecc509fe0362838460c64 = $this->env->getExtension("native_profiler");
        $__internal_17c4983fecd1d21445e9a359f773286519eb537c5a3ecc509fe0362838460c64->enter($__internal_17c4983fecd1d21445e9a359f773286519eb537c5a3ecc509fe0362838460c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c4983fecd1d21445e9a359f773286519eb537c5a3ecc509fe0362838460c64->leave($__internal_17c4983fecd1d21445e9a359f773286519eb537c5a3ecc509fe0362838460c64_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d83b1775654c670868b9dbe0df7557b1a98e38479f7bf04c2d81b53467777da6 = $this->env->getExtension("native_profiler");
        $__internal_d83b1775654c670868b9dbe0df7557b1a98e38479f7bf04c2d81b53467777da6->enter($__internal_d83b1775654c670868b9dbe0df7557b1a98e38479f7bf04c2d81b53467777da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d83b1775654c670868b9dbe0df7557b1a98e38479f7bf04c2d81b53467777da6->leave($__internal_d83b1775654c670868b9dbe0df7557b1a98e38479f7bf04c2d81b53467777da6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
