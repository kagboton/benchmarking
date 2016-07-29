<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6af2beb518db38139b9f4e94398a5f3f06a9cfb5be6b2a0818df3cafc0b5308f extends Twig_Template
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
        $__internal_820ba4c55f1f66b4b1c316a0b64883e66ba28bd8e18e5df016dfa3b7ce18773b = $this->env->getExtension("native_profiler");
        $__internal_820ba4c55f1f66b4b1c316a0b64883e66ba28bd8e18e5df016dfa3b7ce18773b->enter($__internal_820ba4c55f1f66b4b1c316a0b64883e66ba28bd8e18e5df016dfa3b7ce18773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_820ba4c55f1f66b4b1c316a0b64883e66ba28bd8e18e5df016dfa3b7ce18773b->leave($__internal_820ba4c55f1f66b4b1c316a0b64883e66ba28bd8e18e5df016dfa3b7ce18773b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f9e9696b0f44a5ef9c8e039c7e6d9de9dddc68ae8f377a407563d42556f403bf = $this->env->getExtension("native_profiler");
        $__internal_f9e9696b0f44a5ef9c8e039c7e6d9de9dddc68ae8f377a407563d42556f403bf->enter($__internal_f9e9696b0f44a5ef9c8e039c7e6d9de9dddc68ae8f377a407563d42556f403bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f9e9696b0f44a5ef9c8e039c7e6d9de9dddc68ae8f377a407563d42556f403bf->leave($__internal_f9e9696b0f44a5ef9c8e039c7e6d9de9dddc68ae8f377a407563d42556f403bf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_32c5369f054eb9c6db81af1b5c6c79f7760b7a5b18a4c968121a4a6c29dc63e6 = $this->env->getExtension("native_profiler");
        $__internal_32c5369f054eb9c6db81af1b5c6c79f7760b7a5b18a4c968121a4a6c29dc63e6->enter($__internal_32c5369f054eb9c6db81af1b5c6c79f7760b7a5b18a4c968121a4a6c29dc63e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_32c5369f054eb9c6db81af1b5c6c79f7760b7a5b18a4c968121a4a6c29dc63e6->leave($__internal_32c5369f054eb9c6db81af1b5c6c79f7760b7a5b18a4c968121a4a6c29dc63e6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ceac7564e06fdd8f361f7181bdde5a5fe9e7d3edc01dce626c271923c18a4a4d = $this->env->getExtension("native_profiler");
        $__internal_ceac7564e06fdd8f361f7181bdde5a5fe9e7d3edc01dce626c271923c18a4a4d->enter($__internal_ceac7564e06fdd8f361f7181bdde5a5fe9e7d3edc01dce626c271923c18a4a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ceac7564e06fdd8f361f7181bdde5a5fe9e7d3edc01dce626c271923c18a4a4d->leave($__internal_ceac7564e06fdd8f361f7181bdde5a5fe9e7d3edc01dce626c271923c18a4a4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
