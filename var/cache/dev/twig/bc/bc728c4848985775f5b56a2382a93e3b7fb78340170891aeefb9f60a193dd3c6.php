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
        $__internal_f852ba1ec215b16383fec3d74e128b0a97afacdef5683d48d55cf0e508eaa051 = $this->env->getExtension("native_profiler");
        $__internal_f852ba1ec215b16383fec3d74e128b0a97afacdef5683d48d55cf0e508eaa051->enter($__internal_f852ba1ec215b16383fec3d74e128b0a97afacdef5683d48d55cf0e508eaa051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f852ba1ec215b16383fec3d74e128b0a97afacdef5683d48d55cf0e508eaa051->leave($__internal_f852ba1ec215b16383fec3d74e128b0a97afacdef5683d48d55cf0e508eaa051_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1b27c43d49b93cbebd4356fa6aba90f879a080a855e18fbdee2ed739dcef78a0 = $this->env->getExtension("native_profiler");
        $__internal_1b27c43d49b93cbebd4356fa6aba90f879a080a855e18fbdee2ed739dcef78a0->enter($__internal_1b27c43d49b93cbebd4356fa6aba90f879a080a855e18fbdee2ed739dcef78a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1b27c43d49b93cbebd4356fa6aba90f879a080a855e18fbdee2ed739dcef78a0->leave($__internal_1b27c43d49b93cbebd4356fa6aba90f879a080a855e18fbdee2ed739dcef78a0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c18fe0a5aa65423b946a53a2b4db3e621a628d4ad1ebd0fbfa5583d27163344f = $this->env->getExtension("native_profiler");
        $__internal_c18fe0a5aa65423b946a53a2b4db3e621a628d4ad1ebd0fbfa5583d27163344f->enter($__internal_c18fe0a5aa65423b946a53a2b4db3e621a628d4ad1ebd0fbfa5583d27163344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c18fe0a5aa65423b946a53a2b4db3e621a628d4ad1ebd0fbfa5583d27163344f->leave($__internal_c18fe0a5aa65423b946a53a2b4db3e621a628d4ad1ebd0fbfa5583d27163344f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e069b4fcc3ba928e1566991daaa466751bef8cc9861b988deb909bb8ca11cdf = $this->env->getExtension("native_profiler");
        $__internal_5e069b4fcc3ba928e1566991daaa466751bef8cc9861b988deb909bb8ca11cdf->enter($__internal_5e069b4fcc3ba928e1566991daaa466751bef8cc9861b988deb909bb8ca11cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e069b4fcc3ba928e1566991daaa466751bef8cc9861b988deb909bb8ca11cdf->leave($__internal_5e069b4fcc3ba928e1566991daaa466751bef8cc9861b988deb909bb8ca11cdf_prof);

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
