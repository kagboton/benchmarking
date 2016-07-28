<?php

/* BenchmarkingBundle:Default/Localisation:index.html.twig */
class __TwigTemplate_9d9a1772458a6378c91df2794299979bd3955a7ce8b84439d39510bcaf8bd284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/Localisation:index.html.twig", 3);
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
        $__internal_8de007291d48a57223ac7c0d869d3025f0e67136825c599091ff3cc96ffe5703 = $this->env->getExtension("native_profiler");
        $__internal_8de007291d48a57223ac7c0d869d3025f0e67136825c599091ff3cc96ffe5703->enter($__internal_8de007291d48a57223ac7c0d869d3025f0e67136825c599091ff3cc96ffe5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Localisation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de007291d48a57223ac7c0d869d3025f0e67136825c599091ff3cc96ffe5703->leave($__internal_8de007291d48a57223ac7c0d869d3025f0e67136825c599091ff3cc96ffe5703_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db39520a2d35cb9b63f1e41ec1f388f9e7226ccd57fb93a764b769a6473e95ba = $this->env->getExtension("native_profiler");
        $__internal_db39520a2d35cb9b63f1e41ec1f388f9e7226ccd57fb93a764b769a6473e95ba->enter($__internal_db39520a2d35cb9b63f1e41ec1f388f9e7226ccd57fb93a764b769a6473e95ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_db39520a2d35cb9b63f1e41ec1f388f9e7226ccd57fb93a764b769a6473e95ba->leave($__internal_db39520a2d35cb9b63f1e41ec1f388f9e7226ccd57fb93a764b769a6473e95ba_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_81d9c9b8522c234a782bdb0b7b0b9677dd2ce96f16a719396a6a43be1c5520dd = $this->env->getExtension("native_profiler");
        $__internal_81d9c9b8522c234a782bdb0b7b0b9677dd2ce96f16a719396a6a43be1c5520dd->enter($__internal_81d9c9b8522c234a782bdb0b7b0b9677dd2ce96f16a719396a6a43be1c5520dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des localisations</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listLocalisations"]) ? $context["listLocalisations"] : $this->getContext($context, "listLocalisations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_view", array("id" => $this->getAttribute($context["localisation"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["localisation"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de localisations</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>


";
        
        $__internal_81d9c9b8522c234a782bdb0b7b0b9677dd2ce96f16a719396a6a43be1c5520dd->leave($__internal_81d9c9b8522c234a782bdb0b7b0b9677dd2ce96f16a719396a6a43be1c5520dd_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Localisation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Localisation/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Localisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*   <h2>Liste des localisations</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for localisation in listLocalisations %}*/
/*       <li>*/
/*         <a href="{{ path('localisation_view', {'id': localisation.id}) }}">*/
/*           {{ localisation.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de localisations</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* */
/* {% endblock %}*/
/* */
