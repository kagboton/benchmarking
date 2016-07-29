<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_8ddea339781f82618605948681ff1970ba299828f093b987fc58a955b4820ea7 extends Twig_Template
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
        $__internal_5b6aa2f0c9f05b155a443e198c5914b6c041e91d237a10d207868bf804b580a6 = $this->env->getExtension("native_profiler");
        $__internal_5b6aa2f0c9f05b155a443e198c5914b6c041e91d237a10d207868bf804b580a6->enter($__internal_5b6aa2f0c9f05b155a443e198c5914b6c041e91d237a10d207868bf804b580a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5b6aa2f0c9f05b155a443e198c5914b6c041e91d237a10d207868bf804b580a6->leave($__internal_5b6aa2f0c9f05b155a443e198c5914b6c041e91d237a10d207868bf804b580a6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ad415360e38704d54e31a531f1bcbc399eb80946ede9655bc04b307d1c9f758c = $this->env->getExtension("native_profiler");
        $__internal_ad415360e38704d54e31a531f1bcbc399eb80946ede9655bc04b307d1c9f758c->enter($__internal_ad415360e38704d54e31a531f1bcbc399eb80946ede9655bc04b307d1c9f758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ad415360e38704d54e31a531f1bcbc399eb80946ede9655bc04b307d1c9f758c->leave($__internal_ad415360e38704d54e31a531f1bcbc399eb80946ede9655bc04b307d1c9f758c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1a1049bc36443c9b3dc5f984b2b3fc0dec19c294974afc2137cbea4f1e5dec63 = $this->env->getExtension("native_profiler");
        $__internal_1a1049bc36443c9b3dc5f984b2b3fc0dec19c294974afc2137cbea4f1e5dec63->enter($__internal_1a1049bc36443c9b3dc5f984b2b3fc0dec19c294974afc2137cbea4f1e5dec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1a1049bc36443c9b3dc5f984b2b3fc0dec19c294974afc2137cbea4f1e5dec63->leave($__internal_1a1049bc36443c9b3dc5f984b2b3fc0dec19c294974afc2137cbea4f1e5dec63_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7c7caf24c28af8307c5b5585770f871346403c9116eb802a62e7e3f71fbdde18 = $this->env->getExtension("native_profiler");
        $__internal_7c7caf24c28af8307c5b5585770f871346403c9116eb802a62e7e3f71fbdde18->enter($__internal_7c7caf24c28af8307c5b5585770f871346403c9116eb802a62e7e3f71fbdde18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7c7caf24c28af8307c5b5585770f871346403c9116eb802a62e7e3f71fbdde18->leave($__internal_7c7caf24c28af8307c5b5585770f871346403c9116eb802a62e7e3f71fbdde18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
