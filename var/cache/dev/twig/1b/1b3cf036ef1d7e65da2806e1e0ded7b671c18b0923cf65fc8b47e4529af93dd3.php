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
        $__internal_aece3bf829e688981922d93d4828a7b321ae54d0aaa3975097fbc2e430579a78 = $this->env->getExtension("native_profiler");
        $__internal_aece3bf829e688981922d93d4828a7b321ae54d0aaa3975097fbc2e430579a78->enter($__internal_aece3bf829e688981922d93d4828a7b321ae54d0aaa3975097fbc2e430579a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aece3bf829e688981922d93d4828a7b321ae54d0aaa3975097fbc2e430579a78->leave($__internal_aece3bf829e688981922d93d4828a7b321ae54d0aaa3975097fbc2e430579a78_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4eb4d8f3fbad7f4058f146d0fe7cc50311f2d8210ac2d627b2eddda036f87186 = $this->env->getExtension("native_profiler");
        $__internal_4eb4d8f3fbad7f4058f146d0fe7cc50311f2d8210ac2d627b2eddda036f87186->enter($__internal_4eb4d8f3fbad7f4058f146d0fe7cc50311f2d8210ac2d627b2eddda036f87186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4eb4d8f3fbad7f4058f146d0fe7cc50311f2d8210ac2d627b2eddda036f87186->leave($__internal_4eb4d8f3fbad7f4058f146d0fe7cc50311f2d8210ac2d627b2eddda036f87186_prof);

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
