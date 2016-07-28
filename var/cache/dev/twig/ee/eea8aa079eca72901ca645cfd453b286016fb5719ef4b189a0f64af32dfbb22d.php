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
        $__internal_3b60d91dd79a29d47171c16b6d8e437d70bf4718e32eeb6474d6e69ea6590c97 = $this->env->getExtension("native_profiler");
        $__internal_3b60d91dd79a29d47171c16b6d8e437d70bf4718e32eeb6474d6e69ea6590c97->enter($__internal_3b60d91dd79a29d47171c16b6d8e437d70bf4718e32eeb6474d6e69ea6590c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3b60d91dd79a29d47171c16b6d8e437d70bf4718e32eeb6474d6e69ea6590c97->leave($__internal_3b60d91dd79a29d47171c16b6d8e437d70bf4718e32eeb6474d6e69ea6590c97_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_142ccb654bdf89ee727d69bce28452f1c230b38c388255b6c884b1a4b33f3184 = $this->env->getExtension("native_profiler");
        $__internal_142ccb654bdf89ee727d69bce28452f1c230b38c388255b6c884b1a4b33f3184->enter($__internal_142ccb654bdf89ee727d69bce28452f1c230b38c388255b6c884b1a4b33f3184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_142ccb654bdf89ee727d69bce28452f1c230b38c388255b6c884b1a4b33f3184->leave($__internal_142ccb654bdf89ee727d69bce28452f1c230b38c388255b6c884b1a4b33f3184_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_243d3f679d04997bab89a07cde53199822bdc21a0e101502a06521619feaa49d = $this->env->getExtension("native_profiler");
        $__internal_243d3f679d04997bab89a07cde53199822bdc21a0e101502a06521619feaa49d->enter($__internal_243d3f679d04997bab89a07cde53199822bdc21a0e101502a06521619feaa49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_243d3f679d04997bab89a07cde53199822bdc21a0e101502a06521619feaa49d->leave($__internal_243d3f679d04997bab89a07cde53199822bdc21a0e101502a06521619feaa49d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eea1cee701337b81dfad874fb9aecc705bb8814fd3d396c73798de40a5470bf3 = $this->env->getExtension("native_profiler");
        $__internal_eea1cee701337b81dfad874fb9aecc705bb8814fd3d396c73798de40a5470bf3->enter($__internal_eea1cee701337b81dfad874fb9aecc705bb8814fd3d396c73798de40a5470bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eea1cee701337b81dfad874fb9aecc705bb8814fd3d396c73798de40a5470bf3->leave($__internal_eea1cee701337b81dfad874fb9aecc705bb8814fd3d396c73798de40a5470bf3_prof);

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
