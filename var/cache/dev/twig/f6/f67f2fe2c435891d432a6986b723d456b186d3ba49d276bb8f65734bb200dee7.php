<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9be752d399fb591720546b34bf0c1a7c5c2dadbecedce2a7ba82894fe393970a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 2);
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
        $__internal_a2f483f0f35d1a978d1488b168c80cb4ec860b5db0fdbfb5f6584fdc9c3a48d1 = $this->env->getExtension("native_profiler");
        $__internal_a2f483f0f35d1a978d1488b168c80cb4ec860b5db0fdbfb5f6584fdc9c3a48d1->enter($__internal_a2f483f0f35d1a978d1488b168c80cb4ec860b5db0fdbfb5f6584fdc9c3a48d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f483f0f35d1a978d1488b168c80cb4ec860b5db0fdbfb5f6584fdc9c3a48d1->leave($__internal_a2f483f0f35d1a978d1488b168c80cb4ec860b5db0fdbfb5f6584fdc9c3a48d1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a7810e5078f2c8a29e26a6a4a9be431bb6f733aa1eaf291b0ca61638114aa32 = $this->env->getExtension("native_profiler");
        $__internal_8a7810e5078f2c8a29e26a6a4a9be431bb6f733aa1eaf291b0ca61638114aa32->enter($__internal_8a7810e5078f2c8a29e26a6a4a9be431bb6f733aa1eaf291b0ca61638114aa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Changer mot de passe - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8a7810e5078f2c8a29e26a6a4a9be431bb6f733aa1eaf291b0ca61638114aa32->leave($__internal_8a7810e5078f2c8a29e26a6a4a9be431bb6f733aa1eaf291b0ca61638114aa32_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_8c1534bbb0b0d9a743b1277455a536466bd51b5007997d0b330a2a19d673cae1 = $this->env->getExtension("native_profiler");
        $__internal_8c1534bbb0b0d9a743b1277455a536466bd51b5007997d0b330a2a19d673cae1->enter($__internal_8c1534bbb0b0d9a743b1277455a536466bd51b5007997d0b330a2a19d673cae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 9)->display($context);
        
        $__internal_8c1534bbb0b0d9a743b1277455a536466bd51b5007997d0b330a2a19d673cae1->leave($__internal_8c1534bbb0b0d9a743b1277455a536466bd51b5007997d0b330a2a19d673cae1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
