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
        $__internal_e55673997fb5188aeb13b60c8f0bf451a5ab40899fffc0f4e54e4510967d1dfe = $this->env->getExtension("native_profiler");
        $__internal_e55673997fb5188aeb13b60c8f0bf451a5ab40899fffc0f4e54e4510967d1dfe->enter($__internal_e55673997fb5188aeb13b60c8f0bf451a5ab40899fffc0f4e54e4510967d1dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e55673997fb5188aeb13b60c8f0bf451a5ab40899fffc0f4e54e4510967d1dfe->leave($__internal_e55673997fb5188aeb13b60c8f0bf451a5ab40899fffc0f4e54e4510967d1dfe_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d351d4aba50f6314b63bf2dcf6a743e4241f103bb9cb669cc0e4073de8724f2a = $this->env->getExtension("native_profiler");
        $__internal_d351d4aba50f6314b63bf2dcf6a743e4241f103bb9cb669cc0e4073de8724f2a->enter($__internal_d351d4aba50f6314b63bf2dcf6a743e4241f103bb9cb669cc0e4073de8724f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d351d4aba50f6314b63bf2dcf6a743e4241f103bb9cb669cc0e4073de8724f2a->leave($__internal_d351d4aba50f6314b63bf2dcf6a743e4241f103bb9cb669cc0e4073de8724f2a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_43784fa1b730a6af9096b5c31664b2824af0be4231a163a33fb0b1e95e06fcb4 = $this->env->getExtension("native_profiler");
        $__internal_43784fa1b730a6af9096b5c31664b2824af0be4231a163a33fb0b1e95e06fcb4->enter($__internal_43784fa1b730a6af9096b5c31664b2824af0be4231a163a33fb0b1e95e06fcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_43784fa1b730a6af9096b5c31664b2824af0be4231a163a33fb0b1e95e06fcb4->leave($__internal_43784fa1b730a6af9096b5c31664b2824af0be4231a163a33fb0b1e95e06fcb4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e37a4b6569e8b4209a6d0c8ca3f12c5cfa8a3fa4cc99a03d87908b2a1e71375 = $this->env->getExtension("native_profiler");
        $__internal_1e37a4b6569e8b4209a6d0c8ca3f12c5cfa8a3fa4cc99a03d87908b2a1e71375->enter($__internal_1e37a4b6569e8b4209a6d0c8ca3f12c5cfa8a3fa4cc99a03d87908b2a1e71375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1e37a4b6569e8b4209a6d0c8ca3f12c5cfa8a3fa4cc99a03d87908b2a1e71375->leave($__internal_1e37a4b6569e8b4209a6d0c8ca3f12c5cfa8a3fa4cc99a03d87908b2a1e71375_prof);

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
