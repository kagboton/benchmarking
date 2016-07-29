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
        $__internal_93865a1290cda1df81a40a7e0606bddd87026cdf97dae5a97317ee0c5f51fc1f = $this->env->getExtension("native_profiler");
        $__internal_93865a1290cda1df81a40a7e0606bddd87026cdf97dae5a97317ee0c5f51fc1f->enter($__internal_93865a1290cda1df81a40a7e0606bddd87026cdf97dae5a97317ee0c5f51fc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeTdB/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93865a1290cda1df81a40a7e0606bddd87026cdf97dae5a97317ee0c5f51fc1f->leave($__internal_93865a1290cda1df81a40a7e0606bddd87026cdf97dae5a97317ee0c5f51fc1f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_353ed348ff19d18008c61f00378fc2214084fc2565e16585f2fdc356f99cf408 = $this->env->getExtension("native_profiler");
        $__internal_353ed348ff19d18008c61f00378fc2214084fc2565e16585f2fdc356f99cf408->enter($__internal_353ed348ff19d18008c61f00378fc2214084fc2565e16585f2fdc356f99cf408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_353ed348ff19d18008c61f00378fc2214084fc2565e16585f2fdc356f99cf408->leave($__internal_353ed348ff19d18008c61f00378fc2214084fc2565e16585f2fdc356f99cf408_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_8314857201b509be9f402b65c1ad2639b66c02c546eeadab1d1e5414c9b591ee = $this->env->getExtension("native_profiler");
        $__internal_8314857201b509be9f402b65c1ad2639b66c02c546eeadab1d1e5414c9b591ee->enter($__internal_8314857201b509be9f402b65c1ad2639b66c02c546eeadab1d1e5414c9b591ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_8314857201b509be9f402b65c1ad2639b66c02c546eeadab1d1e5414c9b591ee->leave($__internal_8314857201b509be9f402b65c1ad2639b66c02c546eeadab1d1e5414c9b591ee_prof);

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
