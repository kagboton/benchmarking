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
        $__internal_68c36b4fe990bebf452dcc435f2418eb0ce3bbed477e66a1f818c0167260c81c = $this->env->getExtension("native_profiler");
        $__internal_68c36b4fe990bebf452dcc435f2418eb0ce3bbed477e66a1f818c0167260c81c->enter($__internal_68c36b4fe990bebf452dcc435f2418eb0ce3bbed477e66a1f818c0167260c81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c36b4fe990bebf452dcc435f2418eb0ce3bbed477e66a1f818c0167260c81c->leave($__internal_68c36b4fe990bebf452dcc435f2418eb0ce3bbed477e66a1f818c0167260c81c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2be5ad047cebf8a305c0f8da7878ab3bd2d34f150aacbfa259e2b3e8b3394182 = $this->env->getExtension("native_profiler");
        $__internal_2be5ad047cebf8a305c0f8da7878ab3bd2d34f150aacbfa259e2b3e8b3394182->enter($__internal_2be5ad047cebf8a305c0f8da7878ab3bd2d34f150aacbfa259e2b3e8b3394182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2be5ad047cebf8a305c0f8da7878ab3bd2d34f150aacbfa259e2b3e8b3394182->leave($__internal_2be5ad047cebf8a305c0f8da7878ab3bd2d34f150aacbfa259e2b3e8b3394182_prof);

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
