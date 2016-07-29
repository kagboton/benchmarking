<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_fceb9e18d6c10fe588cd71a3e05dac77a24b18e1ee10e54c914ef9de365e4c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_945934e7758cde7c76e630c07021f941e584c9d2430f0fe88c27874695ceb5ef = $this->env->getExtension("native_profiler");
        $__internal_945934e7758cde7c76e630c07021f941e584c9d2430f0fe88c27874695ceb5ef->enter($__internal_945934e7758cde7c76e630c07021f941e584c9d2430f0fe88c27874695ceb5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_945934e7758cde7c76e630c07021f941e584c9d2430f0fe88c27874695ceb5ef->leave($__internal_945934e7758cde7c76e630c07021f941e584c9d2430f0fe88c27874695ceb5ef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ff188faf9bde96eff6b91d9c5885b0167af0ef9b59ed36edf4c02173a515a1d = $this->env->getExtension("native_profiler");
        $__internal_5ff188faf9bde96eff6b91d9c5885b0167af0ef9b59ed36edf4c02173a515a1d->enter($__internal_5ff188faf9bde96eff6b91d9c5885b0167af0ef9b59ed36edf4c02173a515a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5ff188faf9bde96eff6b91d9c5885b0167af0ef9b59ed36edf4c02173a515a1d->leave($__internal_5ff188faf9bde96eff6b91d9c5885b0167af0ef9b59ed36edf4c02173a515a1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
