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
        $__internal_8ea30ec6e966671b695c74ea545ae9929e48c2c154c7c903123c6b01c614f3ba = $this->env->getExtension("native_profiler");
        $__internal_8ea30ec6e966671b695c74ea545ae9929e48c2c154c7c903123c6b01c614f3ba->enter($__internal_8ea30ec6e966671b695c74ea545ae9929e48c2c154c7c903123c6b01c614f3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ea30ec6e966671b695c74ea545ae9929e48c2c154c7c903123c6b01c614f3ba->leave($__internal_8ea30ec6e966671b695c74ea545ae9929e48c2c154c7c903123c6b01c614f3ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e93e43df4dc91c52ecb9184b99c941b19918c1ea1d43480d3cf5b5ded427d55 = $this->env->getExtension("native_profiler");
        $__internal_0e93e43df4dc91c52ecb9184b99c941b19918c1ea1d43480d3cf5b5ded427d55->enter($__internal_0e93e43df4dc91c52ecb9184b99c941b19918c1ea1d43480d3cf5b5ded427d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0e93e43df4dc91c52ecb9184b99c941b19918c1ea1d43480d3cf5b5ded427d55->leave($__internal_0e93e43df4dc91c52ecb9184b99c941b19918c1ea1d43480d3cf5b5ded427d55_prof);

    }

    // line 7
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_b828cd3aa4254c9f61a6892cf38d584e24fd8faa83016a3d54006dd3bf1588c7 = $this->env->getExtension("native_profiler");
        $__internal_b828cd3aa4254c9f61a6892cf38d584e24fd8faa83016a3d54006dd3bf1588c7->enter($__internal_b828cd3aa4254c9f61a6892cf38d584e24fd8faa83016a3d54006dd3bf1588c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 8
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_b828cd3aa4254c9f61a6892cf38d584e24fd8faa83016a3d54006dd3bf1588c7->leave($__internal_b828cd3aa4254c9f61a6892cf38d584e24fd8faa83016a3d54006dd3bf1588c7_prof);

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
