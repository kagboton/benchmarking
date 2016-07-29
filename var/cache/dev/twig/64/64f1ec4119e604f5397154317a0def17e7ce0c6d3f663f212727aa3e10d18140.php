<?php

/* BenchmarkingBundle:Default/SousTechnologieAfficheur:view.html.twig */
class __TwigTemplate_4e3e881e27c07546edd8a6501bf61b4786655c66e275bcf294eaa14727cd31c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/SousTechnologieAfficheur:view.html.twig", 3);
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
        $__internal_f55f2396ef34508115fe4f207855c04e9a2cf65f58b8100ee9268ed066f9cda3 = $this->env->getExtension("native_profiler");
        $__internal_f55f2396ef34508115fe4f207855c04e9a2cf65f58b8100ee9268ed066f9cda3->enter($__internal_f55f2396ef34508115fe4f207855c04e9a2cf65f58b8100ee9268ed066f9cda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f55f2396ef34508115fe4f207855c04e9a2cf65f58b8100ee9268ed066f9cda3->leave($__internal_f55f2396ef34508115fe4f207855c04e9a2cf65f58b8100ee9268ed066f9cda3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dd1f2ac899bb90c3959e675fa7b53afa3f171d3cbf995c07489f84679212376 = $this->env->getExtension("native_profiler");
        $__internal_8dd1f2ac899bb90c3959e675fa7b53afa3f171d3cbf995c07489f84679212376->enter($__internal_8dd1f2ac899bb90c3959e675fa7b53afa3f171d3cbf995c07489f84679212376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8dd1f2ac899bb90c3959e675fa7b53afa3f171d3cbf995c07489f84679212376->leave($__internal_8dd1f2ac899bb90c3959e675fa7b53afa3f171d3cbf995c07489f84679212376_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_9fe5bb4970028b7b542ccde7c71761cc92cbb9bec8776ff7d301d918660cb911 = $this->env->getExtension("native_profiler");
        $__internal_9fe5bb4970028b7b542ccde7c71761cc92cbb9bec8776ff7d301d918660cb911->enter($__internal_9fe5bb4970028b7b542ccde7c71761cc92cbb9bec8776ff7d301d918660cb911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "nom", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sousTechnologiesAfficheur");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_edit", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la sous technologie afficheur
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_delete", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la Sous  Technologie Afficheur
        </a>
    </p>


";
        
        $__internal_9fe5bb4970028b7b542ccde7c71761cc92cbb9bec8776ff7d301d918660cb911->leave($__internal_9fe5bb4970028b7b542ccde7c71761cc92cbb9bec8776ff7d301d918660cb911_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/SousTechnologieAfficheur:view.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/SousTechnologieAfficheur/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une sous technologie afficheur - {{ parent() }}*/
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
/*   <h2>{{ sousTechnologieAfficheur.nom }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('sousTechnologiesAfficheur') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('sousTechnologieAfficheur_edit', {'id': sousTechnologieAfficheur.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la sous technologie afficheur*/
/*         </a>*/
/*         <a href="{{ path('sousTechnologieAfficheur_delete', {'id': sousTechnologieAfficheur.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la Sous  Technologie Afficheur*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
