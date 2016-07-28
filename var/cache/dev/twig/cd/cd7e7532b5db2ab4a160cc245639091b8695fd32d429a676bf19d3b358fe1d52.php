<?php

/* @Benchmarking/Default/CommandePhysique/view.html.twig */
class __TwigTemplate_5c840d8eeeea4df7a02ece35bc7309866c4f02303021eb3fde90dc701950a3b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/CommandePhysique/view.html.twig", 3);
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
        $__internal_22982d577ba3d11dd6e9bf3697cf49729abe6f5a2c0054162acde44a1a7e79f8 = $this->env->getExtension("native_profiler");
        $__internal_22982d577ba3d11dd6e9bf3697cf49729abe6f5a2c0054162acde44a1a7e79f8->enter($__internal_22982d577ba3d11dd6e9bf3697cf49729abe6f5a2c0054162acde44a1a7e79f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22982d577ba3d11dd6e9bf3697cf49729abe6f5a2c0054162acde44a1a7e79f8->leave($__internal_22982d577ba3d11dd6e9bf3697cf49729abe6f5a2c0054162acde44a1a7e79f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdb51032bd43dea0e1ed7491be19142848be2933f826a6a80e2f030ffa5bc9ed = $this->env->getExtension("native_profiler");
        $__internal_bdb51032bd43dea0e1ed7491be19142848be2933f826a6a80e2f030ffa5bc9ed->enter($__internal_bdb51032bd43dea0e1ed7491be19142848be2933f826a6a80e2f030ffa5bc9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une commande physique - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bdb51032bd43dea0e1ed7491be19142848be2933f826a6a80e2f030ffa5bc9ed->leave($__internal_bdb51032bd43dea0e1ed7491be19142848be2933f826a6a80e2f030ffa5bc9ed_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_57e449bf2dd6c92347dccf45b38982860b3043eb54e7db16fb494c2baed03303 = $this->env->getExtension("native_profiler");
        $__internal_57e449bf2dd6c92347dccf45b38982860b3043eb54e7db16fb494c2baed03303->enter($__internal_57e449bf2dd6c92347dccf45b38982860b3043eb54e7db16fb494c2baed03303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "nom", array()), "html", null, true);
        echo "</h2>



    <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("commandesPhysiques");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_edit", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la commande
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_delete", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la commande
        </a>
    </p>


";
        
        $__internal_57e449bf2dd6c92347dccf45b38982860b3043eb54e7db16fb494c2baed03303->leave($__internal_57e449bf2dd6c92347dccf45b38982860b3043eb54e7db16fb494c2baed03303_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/CommandePhysique/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  96 => 28,  89 => 24,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une commande physique - {{ parent() }}*/
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
/*   <h2>{{ commandePhysique.nom }}</h2>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('commandesPhysiques') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('commandePhysique_edit', {'id': commandePhysique.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la commande*/
/*         </a>*/
/*         <a href="{{ path('commandePhysique_delete', {'id': commandePhysique.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la commande*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
