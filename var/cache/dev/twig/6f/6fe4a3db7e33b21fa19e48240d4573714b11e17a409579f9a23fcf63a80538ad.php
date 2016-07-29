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
        $__internal_73cf91f6c01f5893df59ffd6d28347d5cbe88900acad417cfa0a7dec4703252c = $this->env->getExtension("native_profiler");
        $__internal_73cf91f6c01f5893df59ffd6d28347d5cbe88900acad417cfa0a7dec4703252c->enter($__internal_73cf91f6c01f5893df59ffd6d28347d5cbe88900acad417cfa0a7dec4703252c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73cf91f6c01f5893df59ffd6d28347d5cbe88900acad417cfa0a7dec4703252c->leave($__internal_73cf91f6c01f5893df59ffd6d28347d5cbe88900acad417cfa0a7dec4703252c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b12299c1eeba71225fdf884183fe4fd184a20f65e612bdb9f3d2886aa29d4c7f = $this->env->getExtension("native_profiler");
        $__internal_b12299c1eeba71225fdf884183fe4fd184a20f65e612bdb9f3d2886aa29d4c7f->enter($__internal_b12299c1eeba71225fdf884183fe4fd184a20f65e612bdb9f3d2886aa29d4c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b12299c1eeba71225fdf884183fe4fd184a20f65e612bdb9f3d2886aa29d4c7f->leave($__internal_b12299c1eeba71225fdf884183fe4fd184a20f65e612bdb9f3d2886aa29d4c7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e1fa67f0f07966b4c48aa0892e177163e471c99f64004d39eba2fd35eb42a86 = $this->env->getExtension("native_profiler");
        $__internal_4e1fa67f0f07966b4c48aa0892e177163e471c99f64004d39eba2fd35eb42a86->enter($__internal_4e1fa67f0f07966b4c48aa0892e177163e471c99f64004d39eba2fd35eb42a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4e1fa67f0f07966b4c48aa0892e177163e471c99f64004d39eba2fd35eb42a86->leave($__internal_4e1fa67f0f07966b4c48aa0892e177163e471c99f64004d39eba2fd35eb42a86_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d9989e8459660a4efbe0f2e9e7e714e829739adceb3e142a8775db63ddba6e4 = $this->env->getExtension("native_profiler");
        $__internal_8d9989e8459660a4efbe0f2e9e7e714e829739adceb3e142a8775db63ddba6e4->enter($__internal_8d9989e8459660a4efbe0f2e9e7e714e829739adceb3e142a8775db63ddba6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8d9989e8459660a4efbe0f2e9e7e714e829739adceb3e142a8775db63ddba6e4->leave($__internal_8d9989e8459660a4efbe0f2e9e7e714e829739adceb3e142a8775db63ddba6e4_prof);

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
