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
        $__internal_8b495d1dc8d006c32ca68851280b30e54676edebc95d9841ef9406297ada4d54 = $this->env->getExtension("native_profiler");
        $__internal_8b495d1dc8d006c32ca68851280b30e54676edebc95d9841ef9406297ada4d54->enter($__internal_8b495d1dc8d006c32ca68851280b30e54676edebc95d9841ef9406297ada4d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b495d1dc8d006c32ca68851280b30e54676edebc95d9841ef9406297ada4d54->leave($__internal_8b495d1dc8d006c32ca68851280b30e54676edebc95d9841ef9406297ada4d54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7e4072c434626468654cf4d48cea19a9fd537107e7ddf856c04eb8539cdd896 = $this->env->getExtension("native_profiler");
        $__internal_f7e4072c434626468654cf4d48cea19a9fd537107e7ddf856c04eb8539cdd896->enter($__internal_f7e4072c434626468654cf4d48cea19a9fd537107e7ddf856c04eb8539cdd896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f7e4072c434626468654cf4d48cea19a9fd537107e7ddf856c04eb8539cdd896->leave($__internal_f7e4072c434626468654cf4d48cea19a9fd537107e7ddf856c04eb8539cdd896_prof);

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
