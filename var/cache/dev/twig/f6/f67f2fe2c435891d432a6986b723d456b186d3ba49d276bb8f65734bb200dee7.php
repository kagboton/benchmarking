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
        $__internal_fec42b6e319877e927d6bdadfaa966ac3977129cd31eae8d7e31ca21e255e769 = $this->env->getExtension("native_profiler");
        $__internal_fec42b6e319877e927d6bdadfaa966ac3977129cd31eae8d7e31ca21e255e769->enter($__internal_fec42b6e319877e927d6bdadfaa966ac3977129cd31eae8d7e31ca21e255e769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec42b6e319877e927d6bdadfaa966ac3977129cd31eae8d7e31ca21e255e769->leave($__internal_fec42b6e319877e927d6bdadfaa966ac3977129cd31eae8d7e31ca21e255e769_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7ff1f8697ec75494fb220a80828541bd39a288b98e9ab547ee4215cdcdd181d = $this->env->getExtension("native_profiler");
        $__internal_b7ff1f8697ec75494fb220a80828541bd39a288b98e9ab547ee4215cdcdd181d->enter($__internal_b7ff1f8697ec75494fb220a80828541bd39a288b98e9ab547ee4215cdcdd181d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Changer mot de passe - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7ff1f8697ec75494fb220a80828541bd39a288b98e9ab547ee4215cdcdd181d->leave($__internal_b7ff1f8697ec75494fb220a80828541bd39a288b98e9ab547ee4215cdcdd181d_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_b708833dddd0a5f4256d417125935777135e103e927e327a52b3e0303621f269 = $this->env->getExtension("native_profiler");
        $__internal_b708833dddd0a5f4256d417125935777135e103e927e327a52b3e0303621f269->enter($__internal_b708833dddd0a5f4256d417125935777135e103e927e327a52b3e0303621f269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 9)->display($context);
        
        $__internal_b708833dddd0a5f4256d417125935777135e103e927e327a52b3e0303621f269->leave($__internal_b708833dddd0a5f4256d417125935777135e103e927e327a52b3e0303621f269_prof);

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
