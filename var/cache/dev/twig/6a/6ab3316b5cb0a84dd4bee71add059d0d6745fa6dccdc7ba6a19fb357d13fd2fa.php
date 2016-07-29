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
        $__internal_4fe456cb4e88fe622eef141e13125f135af20133bcf662258b461f0f7815ba05 = $this->env->getExtension("native_profiler");
        $__internal_4fe456cb4e88fe622eef141e13125f135af20133bcf662258b461f0f7815ba05->enter($__internal_4fe456cb4e88fe622eef141e13125f135af20133bcf662258b461f0f7815ba05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe456cb4e88fe622eef141e13125f135af20133bcf662258b461f0f7815ba05->leave($__internal_4fe456cb4e88fe622eef141e13125f135af20133bcf662258b461f0f7815ba05_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_293083911f23f8735512873165e1c5a7eb45a23e267d602d8555f8d924ec914f = $this->env->getExtension("native_profiler");
        $__internal_293083911f23f8735512873165e1c5a7eb45a23e267d602d8555f8d924ec914f->enter($__internal_293083911f23f8735512873165e1c5a7eb45a23e267d602d8555f8d924ec914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_293083911f23f8735512873165e1c5a7eb45a23e267d602d8555f8d924ec914f->leave($__internal_293083911f23f8735512873165e1c5a7eb45a23e267d602d8555f8d924ec914f_prof);

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
