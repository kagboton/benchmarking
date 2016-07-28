<?php

/* @Benchmarking/Default/TypeTdB/view.html.twig */
class __TwigTemplate_eec1f94712f44078d8223819f07b5c66f13a2c99794a7123779e8344d7a06031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeTdB/view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b670ce93977cb4773b573666a4fd3e69e043ef53b291c5f56cc5021d79a715fa = $this->env->getExtension("native_profiler");
        $__internal_b670ce93977cb4773b573666a4fd3e69e043ef53b291c5f56cc5021d79a715fa->enter($__internal_b670ce93977cb4773b573666a4fd3e69e043ef53b291c5f56cc5021d79a715fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeTdB/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b670ce93977cb4773b573666a4fd3e69e043ef53b291c5f56cc5021d79a715fa->leave($__internal_b670ce93977cb4773b573666a4fd3e69e043ef53b291c5f56cc5021d79a715fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0d9d877ebd1be2112004de905c41c4ebf89b5d9fa569cd5dbddda74c63c8959 = $this->env->getExtension("native_profiler");
        $__internal_d0d9d877ebd1be2112004de905c41c4ebf89b5d9fa569cd5dbddda74c63c8959->enter($__internal_d0d9d877ebd1be2112004de905c41c4ebf89b5d9fa569cd5dbddda74c63c8959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d0d9d877ebd1be2112004de905c41c4ebf89b5d9fa569cd5dbddda74c63c8959->leave($__internal_d0d9d877ebd1be2112004de905c41c4ebf89b5d9fa569cd5dbddda74c63c8959_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_74bc2cd89222268a7e9654be6a0c5770e07a978cc28313a63b79c48810f2d9fb = $this->env->getExtension("native_profiler");
        $__internal_74bc2cd89222268a7e9654be6a0c5770e07a978cc28313a63b79c48810f2d9fb->enter($__internal_74bc2cd89222268a7e9654be6a0c5770e07a978cc28313a63b79c48810f2d9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
        <p class=\"alert alert-info\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "nom", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("typesTdB");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_edit", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le type de tableau de bord
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_delete", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le type de tableau de bord
        </a>
    </p>


";
        
        $__internal_74bc2cd89222268a7e9654be6a0c5770e07a978cc28313a63b79c48810f2d9fb->leave($__internal_74bc2cd89222268a7e9654be6a0c5770e07a978cc28313a63b79c48810f2d9fb_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeTdB/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  95 => 27,  88 => 23,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeTdB/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un type de tableau de bord - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*   <h2>{{ typeTdB.nom }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('typesTdB') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('typeTdB_edit', {'id': typeTdB.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le type de tableau de bord*/
/*         </a>*/
/*         <a href="{{ path('typeTdB_delete', {'id': typeTdB.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le type de tableau de bord*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
