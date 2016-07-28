<?php

/* @Benchmarking/Default/ComposantAffichage/view.html.twig */
class __TwigTemplate_18b9c3f5010cd1526225e58c39472ee6f7a3333b335b754eec88a767f71624a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/ComposantAffichage/view.html.twig", 3);
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
        $__internal_7b78075dea17f76691dae40e9a1b13deef544337a8a4e26c6bbfa2d797ada7cf = $this->env->getExtension("native_profiler");
        $__internal_7b78075dea17f76691dae40e9a1b13deef544337a8a4e26c6bbfa2d797ada7cf->enter($__internal_7b78075dea17f76691dae40e9a1b13deef544337a8a4e26c6bbfa2d797ada7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b78075dea17f76691dae40e9a1b13deef544337a8a4e26c6bbfa2d797ada7cf->leave($__internal_7b78075dea17f76691dae40e9a1b13deef544337a8a4e26c6bbfa2d797ada7cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85b6d802c3d80cf97581025ac5b025119e431748b4adc142e49885819ae0e556 = $this->env->getExtension("native_profiler");
        $__internal_85b6d802c3d80cf97581025ac5b025119e431748b4adc142e49885819ae0e556->enter($__internal_85b6d802c3d80cf97581025ac5b025119e431748b4adc142e49885819ae0e556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_85b6d802c3d80cf97581025ac5b025119e431748b4adc142e49885819ae0e556->leave($__internal_85b6d802c3d80cf97581025ac5b025119e431748b4adc142e49885819ae0e556_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_b17be867a1c494f93695f48667fd7514989f8ecf6fbbff0cd3a7d274e9cacc08 = $this->env->getExtension("native_profiler");
        $__internal_b17be867a1c494f93695f48667fd7514989f8ecf6fbbff0cd3a7d274e9cacc08->enter($__internal_b17be867a1c494f93695f48667fd7514989f8ecf6fbbff0cd3a7d274e9cacc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "nom", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("composantsAffichage");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_edit", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le composant
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_delete", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le composant
        </a>
    </p>


";
        
        $__internal_b17be867a1c494f93695f48667fd7514989f8ecf6fbbff0cd3a7d274e9cacc08->leave($__internal_b17be867a1c494f93695f48667fd7514989f8ecf6fbbff0cd3a7d274e9cacc08_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/view.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Fonction/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un composant d'affichage - {{ parent() }}*/
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
/*   <h2>{{ composantAffichage.nom }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('composantsAffichage') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('composantAffichage_edit', {'id': composantAffichage.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le composant*/
/*         </a>*/
/*         <a href="{{ path('composantAffichage_delete', {'id': composantAffichage.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le composant*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
