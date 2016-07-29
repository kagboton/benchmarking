<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_4873d47da5b93afe5b443db4da002185a26df5df1b375310a1da0059b1de6f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_8b096c775fa3046037d09e75d1afca48d5b0da666f3aeadc9eaedb13bcc28d90 = $this->env->getExtension("native_profiler");
        $__internal_8b096c775fa3046037d09e75d1afca48d5b0da666f3aeadc9eaedb13bcc28d90->enter($__internal_8b096c775fa3046037d09e75d1afca48d5b0da666f3aeadc9eaedb13bcc28d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b096c775fa3046037d09e75d1afca48d5b0da666f3aeadc9eaedb13bcc28d90->leave($__internal_8b096c775fa3046037d09e75d1afca48d5b0da666f3aeadc9eaedb13bcc28d90_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a00134b045a2e8bf6c5e47327a86c712b615144fef9dd082207aa9b019ae337 = $this->env->getExtension("native_profiler");
        $__internal_3a00134b045a2e8bf6c5e47327a86c712b615144fef9dd082207aa9b019ae337->enter($__internal_3a00134b045a2e8bf6c5e47327a86c712b615144fef9dd082207aa9b019ae337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3a00134b045a2e8bf6c5e47327a86c712b615144fef9dd082207aa9b019ae337->leave($__internal_3a00134b045a2e8bf6c5e47327a86c712b615144fef9dd082207aa9b019ae337_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
