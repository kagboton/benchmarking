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
        $__internal_185f0e5793c1224481feba9ac3884c26485ed1694249a391ba42120d53596a78 = $this->env->getExtension("native_profiler");
        $__internal_185f0e5793c1224481feba9ac3884c26485ed1694249a391ba42120d53596a78->enter($__internal_185f0e5793c1224481feba9ac3884c26485ed1694249a391ba42120d53596a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_185f0e5793c1224481feba9ac3884c26485ed1694249a391ba42120d53596a78->leave($__internal_185f0e5793c1224481feba9ac3884c26485ed1694249a391ba42120d53596a78_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59448c06ef4ab5a577ebdc830df9438e76d7d1b345361773073af74528ded6cc = $this->env->getExtension("native_profiler");
        $__internal_59448c06ef4ab5a577ebdc830df9438e76d7d1b345361773073af74528ded6cc->enter($__internal_59448c06ef4ab5a577ebdc830df9438e76d7d1b345361773073af74528ded6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_59448c06ef4ab5a577ebdc830df9438e76d7d1b345361773073af74528ded6cc->leave($__internal_59448c06ef4ab5a577ebdc830df9438e76d7d1b345361773073af74528ded6cc_prof);

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
