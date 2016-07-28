<?php

/* @Benchmarking/Default/TailleEcran/index.html.twig */
class __TwigTemplate_e0aa6af8b5ea6e1cf215b334a370d6e269079467fb02a2ab78190adf0e18e614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TailleEcran/index.html.twig", 3);
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
        $__internal_2c5424772cdaca8e20ed9650f4089c911e16e843dcabd1a1f6f8acb08a158dc3 = $this->env->getExtension("native_profiler");
        $__internal_2c5424772cdaca8e20ed9650f4089c911e16e843dcabd1a1f6f8acb08a158dc3->enter($__internal_2c5424772cdaca8e20ed9650f4089c911e16e843dcabd1a1f6f8acb08a158dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5424772cdaca8e20ed9650f4089c911e16e843dcabd1a1f6f8acb08a158dc3->leave($__internal_2c5424772cdaca8e20ed9650f4089c911e16e843dcabd1a1f6f8acb08a158dc3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1ea85a97a2b0f6905b9fc04eaae88dcaff521b9f0da146e41fb2510fbf40f8c = $this->env->getExtension("native_profiler");
        $__internal_e1ea85a97a2b0f6905b9fc04eaae88dcaff521b9f0da146e41fb2510fbf40f8c->enter($__internal_e1ea85a97a2b0f6905b9fc04eaae88dcaff521b9f0da146e41fb2510fbf40f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Taille Ecran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e1ea85a97a2b0f6905b9fc04eaae88dcaff521b9f0da146e41fb2510fbf40f8c->leave($__internal_e1ea85a97a2b0f6905b9fc04eaae88dcaff521b9f0da146e41fb2510fbf40f8c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5732d310e234ff349c7bf88923e2c54ad0ac6f7b16feab829f240cbca3e94024 = $this->env->getExtension("native_profiler");
        $__internal_5732d310e234ff349c7bf88923e2c54ad0ac6f7b16feab829f240cbca3e94024->enter($__internal_5732d310e234ff349c7bf88923e2c54ad0ac6f7b16feab829f240cbca3e94024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des tailles d'écrans</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTaillesEcran"]) ? $context["listTaillesEcran"] : $this->getContext($context, "listTaillesEcran")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tailleEcran"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_view", array("id" => $this->getAttribute($context["tailleEcran"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tailleEcran"], "taille", array()), "html", null, true);
            echo "\"
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de taille d'écran</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tailleEcran'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("tailleEcran_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter une taille d'écran
  </a>


";
        
        $__internal_5732d310e234ff349c7bf88923e2c54ad0ac6f7b16feab829f240cbca3e94024->leave($__internal_5732d310e234ff349c7bf88923e2c54ad0ac6f7b16feab829f240cbca3e94024_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TailleEcran/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TailleEcran/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Taille Ecran - {{ parent() }}*/
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
/*   <h2>Liste des tailles d'écrans</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for tailleEcran in listTaillesEcran %}*/
/*       <li>*/
/*         <a href="{{ path('tailleEcran_view', {'id': tailleEcran.id}) }}">*/
/*           {{ tailleEcran.taille }}"*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de taille d'écran</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('tailleEcran_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter une taille d'écran*/
/*   </a>*/
/* */
/* */
/* {% endblock %}*/
/* */