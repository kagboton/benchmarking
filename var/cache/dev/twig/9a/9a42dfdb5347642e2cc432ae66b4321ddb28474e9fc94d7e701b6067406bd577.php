<?php

/* @Benchmarking/Default/Localisation/index.html.twig */
class __TwigTemplate_41e2ca73cdaca99ced1ccf6fc6e12903f2f1a15d0da2342db5ea114f918c64b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Localisation/index.html.twig", 3);
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
        $__internal_332d4b86d1daa94c1d17cb1539d1422bfaeb598fc242178b67fdfd98e92281bd = $this->env->getExtension("native_profiler");
        $__internal_332d4b86d1daa94c1d17cb1539d1422bfaeb598fc242178b67fdfd98e92281bd->enter($__internal_332d4b86d1daa94c1d17cb1539d1422bfaeb598fc242178b67fdfd98e92281bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Localisation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332d4b86d1daa94c1d17cb1539d1422bfaeb598fc242178b67fdfd98e92281bd->leave($__internal_332d4b86d1daa94c1d17cb1539d1422bfaeb598fc242178b67fdfd98e92281bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_851040da6f3f444e7bb79f2adee8a0184f8e188ca07b897ca83e818691f0397a = $this->env->getExtension("native_profiler");
        $__internal_851040da6f3f444e7bb79f2adee8a0184f8e188ca07b897ca83e818691f0397a->enter($__internal_851040da6f3f444e7bb79f2adee8a0184f8e188ca07b897ca83e818691f0397a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_851040da6f3f444e7bb79f2adee8a0184f8e188ca07b897ca83e818691f0397a->leave($__internal_851040da6f3f444e7bb79f2adee8a0184f8e188ca07b897ca83e818691f0397a_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_a2892fa30014faf170c1b1633e3bf005f2267bc145f801b0905d0db70454dc0a = $this->env->getExtension("native_profiler");
        $__internal_a2892fa30014faf170c1b1633e3bf005f2267bc145f801b0905d0db70454dc0a->enter($__internal_a2892fa30014faf170c1b1633e3bf005f2267bc145f801b0905d0db70454dc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_a2892fa30014faf170c1b1633e3bf005f2267bc145f801b0905d0db70454dc0a->leave($__internal_a2892fa30014faf170c1b1633e3bf005f2267bc145f801b0905d0db70454dc0a_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Localisation/index.html.twig";
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
