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
        $__internal_a5ee7f48521c3141ad958256de0f8d1505902bcc2f21303967de57ccb49864cd = $this->env->getExtension("native_profiler");
        $__internal_a5ee7f48521c3141ad958256de0f8d1505902bcc2f21303967de57ccb49864cd->enter($__internal_a5ee7f48521c3141ad958256de0f8d1505902bcc2f21303967de57ccb49864cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ee7f48521c3141ad958256de0f8d1505902bcc2f21303967de57ccb49864cd->leave($__internal_a5ee7f48521c3141ad958256de0f8d1505902bcc2f21303967de57ccb49864cd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_db45fe72ddca0e79759ae173bd5ccb7104548f4f595e0505263fd5d8e157c113 = $this->env->getExtension("native_profiler");
        $__internal_db45fe72ddca0e79759ae173bd5ccb7104548f4f595e0505263fd5d8e157c113->enter($__internal_db45fe72ddca0e79759ae173bd5ccb7104548f4f595e0505263fd5d8e157c113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Changer mot de passe - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_db45fe72ddca0e79759ae173bd5ccb7104548f4f595e0505263fd5d8e157c113->leave($__internal_db45fe72ddca0e79759ae173bd5ccb7104548f4f595e0505263fd5d8e157c113_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_89f1c095083db350631ebfcdcb0f9dbee5e6c870296249f2b861ca6ab5912023 = $this->env->getExtension("native_profiler");
        $__internal_89f1c095083db350631ebfcdcb0f9dbee5e6c870296249f2b861ca6ab5912023->enter($__internal_89f1c095083db350631ebfcdcb0f9dbee5e6c870296249f2b861ca6ab5912023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 9)->display($context);
        
        $__internal_89f1c095083db350631ebfcdcb0f9dbee5e6c870296249f2b861ca6ab5912023->leave($__internal_89f1c095083db350631ebfcdcb0f9dbee5e6c870296249f2b861ca6ab5912023_prof);

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
