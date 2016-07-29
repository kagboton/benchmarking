<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_66fa39aaf28922aee39671298fe7f092c35104e9237104f9ed3553257ddf16d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e6c722cbd23cc76c115842a93b7a7801bf75f67a0dfd1e615f3b5d614ce06952 = $this->env->getExtension("native_profiler");
        $__internal_e6c722cbd23cc76c115842a93b7a7801bf75f67a0dfd1e615f3b5d614ce06952->enter($__internal_e6c722cbd23cc76c115842a93b7a7801bf75f67a0dfd1e615f3b5d614ce06952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c722cbd23cc76c115842a93b7a7801bf75f67a0dfd1e615f3b5d614ce06952->leave($__internal_e6c722cbd23cc76c115842a93b7a7801bf75f67a0dfd1e615f3b5d614ce06952_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c91b67ee304f6c1b3c2c162134591d3517a1ae21b2ad4e750fc1a1bd768f40c = $this->env->getExtension("native_profiler");
        $__internal_5c91b67ee304f6c1b3c2c162134591d3517a1ae21b2ad4e750fc1a1bd768f40c->enter($__internal_5c91b67ee304f6c1b3c2c162134591d3517a1ae21b2ad4e750fc1a1bd768f40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c91b67ee304f6c1b3c2c162134591d3517a1ae21b2ad4e750fc1a1bd768f40c->leave($__internal_5c91b67ee304f6c1b3c2c162134591d3517a1ae21b2ad4e750fc1a1bd768f40c_prof);

    }

    // line 7
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_e31b0a00fa8b3b0a30e5b56709b129cf1ee0d1d3fba618ba6fb5e48280094d5d = $this->env->getExtension("native_profiler");
        $__internal_e31b0a00fa8b3b0a30e5b56709b129cf1ee0d1d3fba618ba6fb5e48280094d5d->enter($__internal_e31b0a00fa8b3b0a30e5b56709b129cf1ee0d1d3fba618ba6fb5e48280094d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 8
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_e31b0a00fa8b3b0a30e5b56709b129cf1ee0d1d3fba618ba6fb5e48280094d5d->leave($__internal_e31b0a00fa8b3b0a30e5b56709b129cf1ee0d1d3fba618ba6fb5e48280094d5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
