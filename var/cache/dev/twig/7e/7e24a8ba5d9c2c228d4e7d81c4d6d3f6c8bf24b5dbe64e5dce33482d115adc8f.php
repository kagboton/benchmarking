<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fbecb97888d077069a5d2c0dd341ef12bcacccdc3094c90b1d319574b0ae574b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 2);
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
        $__internal_2c2e2affce561ca896a192c80878cdff3aa9a25c25989e3515769bdd9c2d90a7 = $this->env->getExtension("native_profiler");
        $__internal_2c2e2affce561ca896a192c80878cdff3aa9a25c25989e3515769bdd9c2d90a7->enter($__internal_2c2e2affce561ca896a192c80878cdff3aa9a25c25989e3515769bdd9c2d90a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c2e2affce561ca896a192c80878cdff3aa9a25c25989e3515769bdd9c2d90a7->leave($__internal_2c2e2affce561ca896a192c80878cdff3aa9a25c25989e3515769bdd9c2d90a7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6273016953783795e48a348cdc14c07799b4ba40ac9aa0a8e005e3e56f826732 = $this->env->getExtension("native_profiler");
        $__internal_6273016953783795e48a348cdc14c07799b4ba40ac9aa0a8e005e3e56f826732->enter($__internal_6273016953783795e48a348cdc14c07799b4ba40ac9aa0a8e005e3e56f826732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6273016953783795e48a348cdc14c07799b4ba40ac9aa0a8e005e3e56f826732->leave($__internal_6273016953783795e48a348cdc14c07799b4ba40ac9aa0a8e005e3e56f826732_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_56d001283e2973c9d11b512509c38d0578b88579c3f862cdf26c177882750f73 = $this->env->getExtension("native_profiler");
        $__internal_56d001283e2973c9d11b512509c38d0578b88579c3f862cdf26c177882750f73->enter($__internal_56d001283e2973c9d11b512509c38d0578b88579c3f862cdf26c177882750f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 9)->display($context);
        
        $__internal_56d001283e2973c9d11b512509c38d0578b88579c3f862cdf26c177882750f73->leave($__internal_56d001283e2973c9d11b512509c38d0578b88579c3f862cdf26c177882750f73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock admin_body %}*/
/* */
