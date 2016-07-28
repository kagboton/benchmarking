<?php

/* PagesBundle:Default/Pages/layout:page.html.twig */
class __TwigTemplate_6e8c200edbc9006881e0a7847ee38c394dee399b009286039230c935e977b279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default/Pages/layout:page.html.twig", 1);
        $this->blocks = array(
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dcbb4473bfa5f9c69f2bbb5cac949210bc2b1750286f15921a07069523cdb7b = $this->env->getExtension("native_profiler");
        $__internal_7dcbb4473bfa5f9c69f2bbb5cac949210bc2b1750286f15921a07069523cdb7b->enter($__internal_7dcbb4473bfa5f9c69f2bbb5cac949210bc2b1750286f15921a07069523cdb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/Pages/layout:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dcbb4473bfa5f9c69f2bbb5cac949210bc2b1750286f15921a07069523cdb7b->leave($__internal_7dcbb4473bfa5f9c69f2bbb5cac949210bc2b1750286f15921a07069523cdb7b_prof);

    }

    // line 3
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_88ddbffb3810c0b2a3534f8755a27f7733ed6bfe2f543f812a336174eda5dfc8 = $this->env->getExtension("native_profiler");
        $__internal_88ddbffb3810c0b2a3534f8755a27f7733ed6bfe2f543f812a336174eda5dfc8->enter($__internal_88ddbffb3810c0b2a3534f8755a27f7733ed6bfe2f543f812a336174eda5dfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 4
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
            <div class=\"span12\">
                    ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
                </div>
        </div>
    </div>
";
        
        $__internal_88ddbffb3810c0b2a3534f8755a27f7733ed6bfe2f543f812a336174eda5dfc8->leave($__internal_88ddbffb3810c0b2a3534f8755a27f7733ed6bfe2f543f812a336174eda5dfc8_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/Pages/layout:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h1>{{ page.titre }}</h1>*/
/*             <div class="span12">*/
/*                     {{ page.contenu | raw }}*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
