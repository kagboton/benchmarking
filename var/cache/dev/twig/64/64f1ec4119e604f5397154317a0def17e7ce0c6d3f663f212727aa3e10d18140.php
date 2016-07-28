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
        $__internal_42f611c5bcd1ab768a0862d98bab0aa11596dd39964225fa09f2edb6e2aaf4d8 = $this->env->getExtension("native_profiler");
        $__internal_42f611c5bcd1ab768a0862d98bab0aa11596dd39964225fa09f2edb6e2aaf4d8->enter($__internal_42f611c5bcd1ab768a0862d98bab0aa11596dd39964225fa09f2edb6e2aaf4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f611c5bcd1ab768a0862d98bab0aa11596dd39964225fa09f2edb6e2aaf4d8->leave($__internal_42f611c5bcd1ab768a0862d98bab0aa11596dd39964225fa09f2edb6e2aaf4d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74bb8ff0432cbbc32b6696ad2fb5d7bd779cf00bbc5a8b63092a179671fda29f = $this->env->getExtension("native_profiler");
        $__internal_74bb8ff0432cbbc32b6696ad2fb5d7bd779cf00bbc5a8b63092a179671fda29f->enter($__internal_74bb8ff0432cbbc32b6696ad2fb5d7bd779cf00bbc5a8b63092a179671fda29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74bb8ff0432cbbc32b6696ad2fb5d7bd779cf00bbc5a8b63092a179671fda29f->leave($__internal_74bb8ff0432cbbc32b6696ad2fb5d7bd779cf00bbc5a8b63092a179671fda29f_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_84ad8b1ee8d09db0a5f92024c34c6dd51ea3810c4cd1bd6c441e7b1369cd5987 = $this->env->getExtension("native_profiler");
        $__internal_84ad8b1ee8d09db0a5f92024c34c6dd51ea3810c4cd1bd6c441e7b1369cd5987->enter($__internal_84ad8b1ee8d09db0a5f92024c34c6dd51ea3810c4cd1bd6c441e7b1369cd5987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_84ad8b1ee8d09db0a5f92024c34c6dd51ea3810c4cd1bd6c441e7b1369cd5987->leave($__internal_84ad8b1ee8d09db0a5f92024c34c6dd51ea3810c4cd1bd6c441e7b1369cd5987_prof);

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
