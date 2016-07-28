<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_82dee33a8fe68db7b5196a383bbb3404cba1d0e11bc1fe36cfaa16e2893e2276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8faf8ba4e37249458d50bcadf7df474f1b2df8e4e34d2d98e6df6679c8b97f5f = $this->env->getExtension("native_profiler");
        $__internal_8faf8ba4e37249458d50bcadf7df474f1b2df8e4e34d2d98e6df6679c8b97f5f->enter($__internal_8faf8ba4e37249458d50bcadf7df474f1b2df8e4e34d2d98e6df6679c8b97f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8faf8ba4e37249458d50bcadf7df474f1b2df8e4e34d2d98e6df6679c8b97f5f->leave($__internal_8faf8ba4e37249458d50bcadf7df474f1b2df8e4e34d2d98e6df6679c8b97f5f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fff68c255ce295ef15004da60e439d11083fe8caeb2540b37040de18ab01f1bc = $this->env->getExtension("native_profiler");
        $__internal_fff68c255ce295ef15004da60e439d11083fe8caeb2540b37040de18ab01f1bc->enter($__internal_fff68c255ce295ef15004da60e439d11083fe8caeb2540b37040de18ab01f1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fff68c255ce295ef15004da60e439d11083fe8caeb2540b37040de18ab01f1bc->leave($__internal_fff68c255ce295ef15004da60e439d11083fe8caeb2540b37040de18ab01f1bc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ae26635f527494398e0c0033707907fb21b6401b71ecaa000fd3ae98c2331970 = $this->env->getExtension("native_profiler");
        $__internal_ae26635f527494398e0c0033707907fb21b6401b71ecaa000fd3ae98c2331970->enter($__internal_ae26635f527494398e0c0033707907fb21b6401b71ecaa000fd3ae98c2331970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ae26635f527494398e0c0033707907fb21b6401b71ecaa000fd3ae98c2331970->leave($__internal_ae26635f527494398e0c0033707907fb21b6401b71ecaa000fd3ae98c2331970_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dcadddcc28ccd342c81cc42442535e18550fdb1b358352884ba1a9a7c81ade75 = $this->env->getExtension("native_profiler");
        $__internal_dcadddcc28ccd342c81cc42442535e18550fdb1b358352884ba1a9a7c81ade75->enter($__internal_dcadddcc28ccd342c81cc42442535e18550fdb1b358352884ba1a9a7c81ade75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dcadddcc28ccd342c81cc42442535e18550fdb1b358352884ba1a9a7c81ade75->leave($__internal_dcadddcc28ccd342c81cc42442535e18550fdb1b358352884ba1a9a7c81ade75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
