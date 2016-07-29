<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_ae6d97ece0089bfa427a25fd3ec07ca295a848cc49c07b9ca65b8443adc15dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 2);
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
        $__internal_0a73ee612c7b1b3c3a1986356cbf5da75715a946530030f977fb935f5d3953fe = $this->env->getExtension("native_profiler");
        $__internal_0a73ee612c7b1b3c3a1986356cbf5da75715a946530030f977fb935f5d3953fe->enter($__internal_0a73ee612c7b1b3c3a1986356cbf5da75715a946530030f977fb935f5d3953fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a73ee612c7b1b3c3a1986356cbf5da75715a946530030f977fb935f5d3953fe->leave($__internal_0a73ee612c7b1b3c3a1986356cbf5da75715a946530030f977fb935f5d3953fe_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f31541ec5f78fa6461e28bf542c278d0cbd4436029ed8162e92bc8875e35f284 = $this->env->getExtension("native_profiler");
        $__internal_f31541ec5f78fa6461e28bf542c278d0cbd4436029ed8162e92bc8875e35f284->enter($__internal_f31541ec5f78fa6461e28bf542c278d0cbd4436029ed8162e92bc8875e35f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Changer mot de passe - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f31541ec5f78fa6461e28bf542c278d0cbd4436029ed8162e92bc8875e35f284->leave($__internal_f31541ec5f78fa6461e28bf542c278d0cbd4436029ed8162e92bc8875e35f284_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_aeac0a472b67c23fa38eca67788f0e2f0ad14de15a1ed3e29c6b78b34c252ba0 = $this->env->getExtension("native_profiler");
        $__internal_aeac0a472b67c23fa38eca67788f0e2f0ad14de15a1ed3e29c6b78b34c252ba0->enter($__internal_aeac0a472b67c23fa38eca67788f0e2f0ad14de15a1ed3e29c6b78b34c252ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 9)->display($context);
        
        $__internal_aeac0a472b67c23fa38eca67788f0e2f0ad14de15a1ed3e29c6b78b34c252ba0->leave($__internal_aeac0a472b67c23fa38eca67788f0e2f0ad14de15a1ed3e29c6b78b34c252ba0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/*     Changer mot de passe - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/*     {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock admin_body %}*/
/* */
