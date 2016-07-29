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
        $__internal_0571ef99eef897bbd939218bd2547ee929dc78690156099ec12332f9957cedb9 = $this->env->getExtension("native_profiler");
        $__internal_0571ef99eef897bbd939218bd2547ee929dc78690156099ec12332f9957cedb9->enter($__internal_0571ef99eef897bbd939218bd2547ee929dc78690156099ec12332f9957cedb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0571ef99eef897bbd939218bd2547ee929dc78690156099ec12332f9957cedb9->leave($__internal_0571ef99eef897bbd939218bd2547ee929dc78690156099ec12332f9957cedb9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b97bc19dab66a31e08cec1b1eb5bdbcad1389a3fe88b127cbeab9ad5103b16e5 = $this->env->getExtension("native_profiler");
        $__internal_b97bc19dab66a31e08cec1b1eb5bdbcad1389a3fe88b127cbeab9ad5103b16e5->enter($__internal_b97bc19dab66a31e08cec1b1eb5bdbcad1389a3fe88b127cbeab9ad5103b16e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b97bc19dab66a31e08cec1b1eb5bdbcad1389a3fe88b127cbeab9ad5103b16e5->leave($__internal_b97bc19dab66a31e08cec1b1eb5bdbcad1389a3fe88b127cbeab9ad5103b16e5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a9d552b7f06a77b805c259ee1afc034b64d8bf184e22c2a41871b497ce19f49a = $this->env->getExtension("native_profiler");
        $__internal_a9d552b7f06a77b805c259ee1afc034b64d8bf184e22c2a41871b497ce19f49a->enter($__internal_a9d552b7f06a77b805c259ee1afc034b64d8bf184e22c2a41871b497ce19f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a9d552b7f06a77b805c259ee1afc034b64d8bf184e22c2a41871b497ce19f49a->leave($__internal_a9d552b7f06a77b805c259ee1afc034b64d8bf184e22c2a41871b497ce19f49a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_454caa826a16a10178301cd1fbebb7ab487e1c284a4d7ae3fdd8b3580649e335 = $this->env->getExtension("native_profiler");
        $__internal_454caa826a16a10178301cd1fbebb7ab487e1c284a4d7ae3fdd8b3580649e335->enter($__internal_454caa826a16a10178301cd1fbebb7ab487e1c284a4d7ae3fdd8b3580649e335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_454caa826a16a10178301cd1fbebb7ab487e1c284a4d7ae3fdd8b3580649e335->leave($__internal_454caa826a16a10178301cd1fbebb7ab487e1c284a4d7ae3fdd8b3580649e335_prof);

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
