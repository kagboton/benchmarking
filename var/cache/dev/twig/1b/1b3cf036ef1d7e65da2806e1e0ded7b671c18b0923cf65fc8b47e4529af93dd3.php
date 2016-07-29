<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_dbf2ddeb058b9a81d1b878f6988081e3c6d94d5219d9f83cae6207e3fcfdab23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_48fc4ddc26ec1421e13e390ba62f4218211a60658fc8233f21daffeede99c565 = $this->env->getExtension("native_profiler");
        $__internal_48fc4ddc26ec1421e13e390ba62f4218211a60658fc8233f21daffeede99c565->enter($__internal_48fc4ddc26ec1421e13e390ba62f4218211a60658fc8233f21daffeede99c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48fc4ddc26ec1421e13e390ba62f4218211a60658fc8233f21daffeede99c565->leave($__internal_48fc4ddc26ec1421e13e390ba62f4218211a60658fc8233f21daffeede99c565_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2502feb0238a57650c418128147811e7089980c65f17daac28639453cb161c00 = $this->env->getExtension("native_profiler");
        $__internal_2502feb0238a57650c418128147811e7089980c65f17daac28639453cb161c00->enter($__internal_2502feb0238a57650c418128147811e7089980c65f17daac28639453cb161c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2502feb0238a57650c418128147811e7089980c65f17daac28639453cb161c00->leave($__internal_2502feb0238a57650c418128147811e7089980c65f17daac28639453cb161c00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
