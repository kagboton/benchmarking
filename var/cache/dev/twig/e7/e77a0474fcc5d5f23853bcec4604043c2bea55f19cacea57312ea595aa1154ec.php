<?php

/* BenchmarkingBundle:Default/TailleEcran:index.html.twig */
class __TwigTemplate_de20bf857fffd30f92bee4b22b85207b230b6cf6baa29fd68d1b27193ea83f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TailleEcran:index.html.twig", 3);
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
        $__internal_f535d372f42172d342bd6fa80613a648307551005d738aec5c86ce32775772b2 = $this->env->getExtension("native_profiler");
        $__internal_f535d372f42172d342bd6fa80613a648307551005d738aec5c86ce32775772b2->enter($__internal_f535d372f42172d342bd6fa80613a648307551005d738aec5c86ce32775772b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TailleEcran:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f535d372f42172d342bd6fa80613a648307551005d738aec5c86ce32775772b2->leave($__internal_f535d372f42172d342bd6fa80613a648307551005d738aec5c86ce32775772b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b85178c9c4b683aaac42fdc1ce42b8388be621b8bad02217f98663cf8def26f2 = $this->env->getExtension("native_profiler");
        $__internal_b85178c9c4b683aaac42fdc1ce42b8388be621b8bad02217f98663cf8def26f2->enter($__internal_b85178c9c4b683aaac42fdc1ce42b8388be621b8bad02217f98663cf8def26f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Taille Ecran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b85178c9c4b683aaac42fdc1ce42b8388be621b8bad02217f98663cf8def26f2->leave($__internal_b85178c9c4b683aaac42fdc1ce42b8388be621b8bad02217f98663cf8def26f2_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_d9d0945aba16ea9bc0a335e70c0ce6c0cd05d3ec63230a0dff75b70e94b62b15 = $this->env->getExtension("native_profiler");
        $__internal_d9d0945aba16ea9bc0a335e70c0ce6c0cd05d3ec63230a0dff75b70e94b62b15->enter($__internal_d9d0945aba16ea9bc0a335e70c0ce6c0cd05d3ec63230a0dff75b70e94b62b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_d9d0945aba16ea9bc0a335e70c0ce6c0cd05d3ec63230a0dff75b70e94b62b15->leave($__internal_d9d0945aba16ea9bc0a335e70c0ce6c0cd05d3ec63230a0dff75b70e94b62b15_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TailleEcran:index.html.twig";
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
