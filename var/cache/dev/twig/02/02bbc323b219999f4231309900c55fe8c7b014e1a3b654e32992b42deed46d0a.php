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
        $__internal_3dec91518efa68a5937ab1d61e22fd08c04ee73ce340f4d3d7eb20b42dad2974 = $this->env->getExtension("native_profiler");
        $__internal_3dec91518efa68a5937ab1d61e22fd08c04ee73ce340f4d3d7eb20b42dad2974->enter($__internal_3dec91518efa68a5937ab1d61e22fd08c04ee73ce340f4d3d7eb20b42dad2974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dec91518efa68a5937ab1d61e22fd08c04ee73ce340f4d3d7eb20b42dad2974->leave($__internal_3dec91518efa68a5937ab1d61e22fd08c04ee73ce340f4d3d7eb20b42dad2974_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45b56d83f64a5cb558479cc964e21ac2719f98366005f56b5e78e0b396cb1fcd = $this->env->getExtension("native_profiler");
        $__internal_45b56d83f64a5cb558479cc964e21ac2719f98366005f56b5e78e0b396cb1fcd->enter($__internal_45b56d83f64a5cb558479cc964e21ac2719f98366005f56b5e78e0b396cb1fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_45b56d83f64a5cb558479cc964e21ac2719f98366005f56b5e78e0b396cb1fcd->leave($__internal_45b56d83f64a5cb558479cc964e21ac2719f98366005f56b5e78e0b396cb1fcd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9072f4d23c0d45130e197b4468c06f7f064a1c14e10764b27a719ebc59bdd67e = $this->env->getExtension("native_profiler");
        $__internal_9072f4d23c0d45130e197b4468c06f7f064a1c14e10764b27a719ebc59bdd67e->enter($__internal_9072f4d23c0d45130e197b4468c06f7f064a1c14e10764b27a719ebc59bdd67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9072f4d23c0d45130e197b4468c06f7f064a1c14e10764b27a719ebc59bdd67e->leave($__internal_9072f4d23c0d45130e197b4468c06f7f064a1c14e10764b27a719ebc59bdd67e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3269ece26e88524336dab07a777b0a6489f12d72cbf6cf1c097f0e96238ff5f5 = $this->env->getExtension("native_profiler");
        $__internal_3269ece26e88524336dab07a777b0a6489f12d72cbf6cf1c097f0e96238ff5f5->enter($__internal_3269ece26e88524336dab07a777b0a6489f12d72cbf6cf1c097f0e96238ff5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3269ece26e88524336dab07a777b0a6489f12d72cbf6cf1c097f0e96238ff5f5->leave($__internal_3269ece26e88524336dab07a777b0a6489f12d72cbf6cf1c097f0e96238ff5f5_prof);

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
