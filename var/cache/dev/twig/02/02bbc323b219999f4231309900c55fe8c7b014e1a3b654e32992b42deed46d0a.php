<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_89ea50d5a2cf0190cc104ffacf84f8c20f8967eb169e5391d4def16b54a56515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_9d733f6ed173686d958ae5b063ae9a3f1ee72e5c4208cbc0faa2dfcb7e7eeded = $this->env->getExtension("native_profiler");
        $__internal_9d733f6ed173686d958ae5b063ae9a3f1ee72e5c4208cbc0faa2dfcb7e7eeded->enter($__internal_9d733f6ed173686d958ae5b063ae9a3f1ee72e5c4208cbc0faa2dfcb7e7eeded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d733f6ed173686d958ae5b063ae9a3f1ee72e5c4208cbc0faa2dfcb7e7eeded->leave($__internal_9d733f6ed173686d958ae5b063ae9a3f1ee72e5c4208cbc0faa2dfcb7e7eeded_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59604cc65936a6ab6cfebb2daf5536bb790cd061da8cca99e4352588bc29fa5e = $this->env->getExtension("native_profiler");
        $__internal_59604cc65936a6ab6cfebb2daf5536bb790cd061da8cca99e4352588bc29fa5e->enter($__internal_59604cc65936a6ab6cfebb2daf5536bb790cd061da8cca99e4352588bc29fa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_59604cc65936a6ab6cfebb2daf5536bb790cd061da8cca99e4352588bc29fa5e->leave($__internal_59604cc65936a6ab6cfebb2daf5536bb790cd061da8cca99e4352588bc29fa5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b8a43e248783a821f0e6628191a23acd027c5e44573a6f6df2f0254b0b59967 = $this->env->getExtension("native_profiler");
        $__internal_3b8a43e248783a821f0e6628191a23acd027c5e44573a6f6df2f0254b0b59967->enter($__internal_3b8a43e248783a821f0e6628191a23acd027c5e44573a6f6df2f0254b0b59967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b8a43e248783a821f0e6628191a23acd027c5e44573a6f6df2f0254b0b59967->leave($__internal_3b8a43e248783a821f0e6628191a23acd027c5e44573a6f6df2f0254b0b59967_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f304bba9dca25c387339f3ca9cf69270648c13533fb3560bbcbdce1edbc40249 = $this->env->getExtension("native_profiler");
        $__internal_f304bba9dca25c387339f3ca9cf69270648c13533fb3560bbcbdce1edbc40249->enter($__internal_f304bba9dca25c387339f3ca9cf69270648c13533fb3560bbcbdce1edbc40249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f304bba9dca25c387339f3ca9cf69270648c13533fb3560bbcbdce1edbc40249->leave($__internal_f304bba9dca25c387339f3ca9cf69270648c13533fb3560bbcbdce1edbc40249_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
