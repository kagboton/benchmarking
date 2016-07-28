<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e75950764186b94676fa76f24a14d687fae8e26d38d3b6b10f7a0caf01945c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_9d01155fe512a4476ff3ace576296320b67e1a5b8eac4f3f991cdf2468250b1a = $this->env->getExtension("native_profiler");
        $__internal_9d01155fe512a4476ff3ace576296320b67e1a5b8eac4f3f991cdf2468250b1a->enter($__internal_9d01155fe512a4476ff3ace576296320b67e1a5b8eac4f3f991cdf2468250b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d01155fe512a4476ff3ace576296320b67e1a5b8eac4f3f991cdf2468250b1a->leave($__internal_9d01155fe512a4476ff3ace576296320b67e1a5b8eac4f3f991cdf2468250b1a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe6eb6d010950d57030069e334576229303f062f9d26d96e14ed95cf097e65bd = $this->env->getExtension("native_profiler");
        $__internal_fe6eb6d010950d57030069e334576229303f062f9d26d96e14ed95cf097e65bd->enter($__internal_fe6eb6d010950d57030069e334576229303f062f9d26d96e14ed95cf097e65bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fe6eb6d010950d57030069e334576229303f062f9d26d96e14ed95cf097e65bd->leave($__internal_fe6eb6d010950d57030069e334576229303f062f9d26d96e14ed95cf097e65bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
