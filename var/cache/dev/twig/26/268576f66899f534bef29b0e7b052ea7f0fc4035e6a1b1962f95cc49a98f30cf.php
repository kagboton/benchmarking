<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_c110640858e08c01f74f918215ebd152ac7f37b84bb2b4714f8eb772ddd41e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_2c597ceb70f496859c93bddad807004523404e66dffb7dab1198102313ea2c31 = $this->env->getExtension("native_profiler");
        $__internal_2c597ceb70f496859c93bddad807004523404e66dffb7dab1198102313ea2c31->enter($__internal_2c597ceb70f496859c93bddad807004523404e66dffb7dab1198102313ea2c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c597ceb70f496859c93bddad807004523404e66dffb7dab1198102313ea2c31->leave($__internal_2c597ceb70f496859c93bddad807004523404e66dffb7dab1198102313ea2c31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_044e58dbf2461572c461f47c7e6718b1db2a908b61a850fc1dfccaf29b4e3920 = $this->env->getExtension("native_profiler");
        $__internal_044e58dbf2461572c461f47c7e6718b1db2a908b61a850fc1dfccaf29b4e3920->enter($__internal_044e58dbf2461572c461f47c7e6718b1db2a908b61a850fc1dfccaf29b4e3920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_044e58dbf2461572c461f47c7e6718b1db2a908b61a850fc1dfccaf29b4e3920->leave($__internal_044e58dbf2461572c461f47c7e6718b1db2a908b61a850fc1dfccaf29b4e3920_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
