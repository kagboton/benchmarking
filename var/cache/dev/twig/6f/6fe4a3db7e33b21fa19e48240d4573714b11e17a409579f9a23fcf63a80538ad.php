<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ead46bcaf35920634080d1529648c97445fa973e3dac26aeac75a12395b6fb6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f03f75fe6fe225f76181b56c414918de053172f8b0ab78624de9d8b99d48a0ca = $this->env->getExtension("native_profiler");
        $__internal_f03f75fe6fe225f76181b56c414918de053172f8b0ab78624de9d8b99d48a0ca->enter($__internal_f03f75fe6fe225f76181b56c414918de053172f8b0ab78624de9d8b99d48a0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03f75fe6fe225f76181b56c414918de053172f8b0ab78624de9d8b99d48a0ca->leave($__internal_f03f75fe6fe225f76181b56c414918de053172f8b0ab78624de9d8b99d48a0ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f4754c54e49fa046526902f9d0e1ffa138b408ed31029e3a7710f4ea4b328c3 = $this->env->getExtension("native_profiler");
        $__internal_9f4754c54e49fa046526902f9d0e1ffa138b408ed31029e3a7710f4ea4b328c3->enter($__internal_9f4754c54e49fa046526902f9d0e1ffa138b408ed31029e3a7710f4ea4b328c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f4754c54e49fa046526902f9d0e1ffa138b408ed31029e3a7710f4ea4b328c3->leave($__internal_9f4754c54e49fa046526902f9d0e1ffa138b408ed31029e3a7710f4ea4b328c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_988268868fa656b0726ce9608ee7f41385073afa2945e90caa959bdb94818fe4 = $this->env->getExtension("native_profiler");
        $__internal_988268868fa656b0726ce9608ee7f41385073afa2945e90caa959bdb94818fe4->enter($__internal_988268868fa656b0726ce9608ee7f41385073afa2945e90caa959bdb94818fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_988268868fa656b0726ce9608ee7f41385073afa2945e90caa959bdb94818fe4->leave($__internal_988268868fa656b0726ce9608ee7f41385073afa2945e90caa959bdb94818fe4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c26dd1ab2e41c023cc156d1b13dd5d84cf6a0c528cae6927063e090e801e14a2 = $this->env->getExtension("native_profiler");
        $__internal_c26dd1ab2e41c023cc156d1b13dd5d84cf6a0c528cae6927063e090e801e14a2->enter($__internal_c26dd1ab2e41c023cc156d1b13dd5d84cf6a0c528cae6927063e090e801e14a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c26dd1ab2e41c023cc156d1b13dd5d84cf6a0c528cae6927063e090e801e14a2->leave($__internal_c26dd1ab2e41c023cc156d1b13dd5d84cf6a0c528cae6927063e090e801e14a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
