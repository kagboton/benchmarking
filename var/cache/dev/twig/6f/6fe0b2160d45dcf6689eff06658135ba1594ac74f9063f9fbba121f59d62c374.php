<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_95170e1156d96cb22afa933aa36ec5ce8559ec45f149f48b7feb20d686d6434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_ac4678cd6ff1ce265a3ec0e513a8c35de785503b9fc3c5f17d9ed0833f419a7c = $this->env->getExtension("native_profiler");
        $__internal_ac4678cd6ff1ce265a3ec0e513a8c35de785503b9fc3c5f17d9ed0833f419a7c->enter($__internal_ac4678cd6ff1ce265a3ec0e513a8c35de785503b9fc3c5f17d9ed0833f419a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4678cd6ff1ce265a3ec0e513a8c35de785503b9fc3c5f17d9ed0833f419a7c->leave($__internal_ac4678cd6ff1ce265a3ec0e513a8c35de785503b9fc3c5f17d9ed0833f419a7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b4693375de8ef46ed501d7329a4ca8eb4bc26fb96316580db16fee70782a302 = $this->env->getExtension("native_profiler");
        $__internal_4b4693375de8ef46ed501d7329a4ca8eb4bc26fb96316580db16fee70782a302->enter($__internal_4b4693375de8ef46ed501d7329a4ca8eb4bc26fb96316580db16fee70782a302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4b4693375de8ef46ed501d7329a4ca8eb4bc26fb96316580db16fee70782a302->leave($__internal_4b4693375de8ef46ed501d7329a4ca8eb4bc26fb96316580db16fee70782a302_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */