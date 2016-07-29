<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_c28ec42c24aba2d04c97f75bcb2715c75542a93c2f48b7bf25b152f80e892d27 extends Twig_Template
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
        $__internal_d4dc5a2e6f959240f059b9a86b8e565646ae3271562a5c95cf230e776fa7ac6f = $this->env->getExtension("native_profiler");
        $__internal_d4dc5a2e6f959240f059b9a86b8e565646ae3271562a5c95cf230e776fa7ac6f->enter($__internal_d4dc5a2e6f959240f059b9a86b8e565646ae3271562a5c95cf230e776fa7ac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d4dc5a2e6f959240f059b9a86b8e565646ae3271562a5c95cf230e776fa7ac6f->leave($__internal_d4dc5a2e6f959240f059b9a86b8e565646ae3271562a5c95cf230e776fa7ac6f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_958ee15fc980d18431ddbbacdc078c016f84f6df5a80d81b28b1b040e3e1d824 = $this->env->getExtension("native_profiler");
        $__internal_958ee15fc980d18431ddbbacdc078c016f84f6df5a80d81b28b1b040e3e1d824->enter($__internal_958ee15fc980d18431ddbbacdc078c016f84f6df5a80d81b28b1b040e3e1d824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_958ee15fc980d18431ddbbacdc078c016f84f6df5a80d81b28b1b040e3e1d824->leave($__internal_958ee15fc980d18431ddbbacdc078c016f84f6df5a80d81b28b1b040e3e1d824_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_37613d937729721c8896f0b3622287a3c6113d8ca1b2ed3b66bde5b937422e8c = $this->env->getExtension("native_profiler");
        $__internal_37613d937729721c8896f0b3622287a3c6113d8ca1b2ed3b66bde5b937422e8c->enter($__internal_37613d937729721c8896f0b3622287a3c6113d8ca1b2ed3b66bde5b937422e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_37613d937729721c8896f0b3622287a3c6113d8ca1b2ed3b66bde5b937422e8c->leave($__internal_37613d937729721c8896f0b3622287a3c6113d8ca1b2ed3b66bde5b937422e8c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c40a365a8174a818da8dc87f9f2ea0464e65857152c057afd51a2ed23cd28352 = $this->env->getExtension("native_profiler");
        $__internal_c40a365a8174a818da8dc87f9f2ea0464e65857152c057afd51a2ed23cd28352->enter($__internal_c40a365a8174a818da8dc87f9f2ea0464e65857152c057afd51a2ed23cd28352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c40a365a8174a818da8dc87f9f2ea0464e65857152c057afd51a2ed23cd28352->leave($__internal_c40a365a8174a818da8dc87f9f2ea0464e65857152c057afd51a2ed23cd28352_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
