<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_93fa2dea474b807edda2bd93c27389f87217d60e59f9bf52d464f2e5c7c87f16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_d0dba69dbcc1ef64e8442d0fe710b759fd3f3184a955325b3b4d718ee339ab38 = $this->env->getExtension("native_profiler");
        $__internal_d0dba69dbcc1ef64e8442d0fe710b759fd3f3184a955325b3b4d718ee339ab38->enter($__internal_d0dba69dbcc1ef64e8442d0fe710b759fd3f3184a955325b3b4d718ee339ab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0dba69dbcc1ef64e8442d0fe710b759fd3f3184a955325b3b4d718ee339ab38->leave($__internal_d0dba69dbcc1ef64e8442d0fe710b759fd3f3184a955325b3b4d718ee339ab38_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd9952d0d272f45ceab2bf9f8b2decda5b17e14bcd137ae46c2a9bb9ded91759 = $this->env->getExtension("native_profiler");
        $__internal_dd9952d0d272f45ceab2bf9f8b2decda5b17e14bcd137ae46c2a9bb9ded91759->enter($__internal_dd9952d0d272f45ceab2bf9f8b2decda5b17e14bcd137ae46c2a9bb9ded91759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_dd9952d0d272f45ceab2bf9f8b2decda5b17e14bcd137ae46c2a9bb9ded91759->leave($__internal_dd9952d0d272f45ceab2bf9f8b2decda5b17e14bcd137ae46c2a9bb9ded91759_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
