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
        $__internal_fe75356cffb8142b6be368aea8507d02bf5aae7f19260c61f627629eaa0734ad = $this->env->getExtension("native_profiler");
        $__internal_fe75356cffb8142b6be368aea8507d02bf5aae7f19260c61f627629eaa0734ad->enter($__internal_fe75356cffb8142b6be368aea8507d02bf5aae7f19260c61f627629eaa0734ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe75356cffb8142b6be368aea8507d02bf5aae7f19260c61f627629eaa0734ad->leave($__internal_fe75356cffb8142b6be368aea8507d02bf5aae7f19260c61f627629eaa0734ad_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_78e926718a6b0d211a2bca16e15086bfd4bb6e877b617e747d2982c49929a47b = $this->env->getExtension("native_profiler");
        $__internal_78e926718a6b0d211a2bca16e15086bfd4bb6e877b617e747d2982c49929a47b->enter($__internal_78e926718a6b0d211a2bca16e15086bfd4bb6e877b617e747d2982c49929a47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_78e926718a6b0d211a2bca16e15086bfd4bb6e877b617e747d2982c49929a47b->leave($__internal_78e926718a6b0d211a2bca16e15086bfd4bb6e877b617e747d2982c49929a47b_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_3af3feb28d488009ddfd85ac6eb596f3bd74d521202692e4e8443a7bb8d45f1c = $this->env->getExtension("native_profiler");
        $__internal_3af3feb28d488009ddfd85ac6eb596f3bd74d521202692e4e8443a7bb8d45f1c->enter($__internal_3af3feb28d488009ddfd85ac6eb596f3bd74d521202692e4e8443a7bb8d45f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 9)->display($context);
        
        $__internal_3af3feb28d488009ddfd85ac6eb596f3bd74d521202692e4e8443a7bb8d45f1c->leave($__internal_3af3feb28d488009ddfd85ac6eb596f3bd74d521202692e4e8443a7bb8d45f1c_prof);

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
