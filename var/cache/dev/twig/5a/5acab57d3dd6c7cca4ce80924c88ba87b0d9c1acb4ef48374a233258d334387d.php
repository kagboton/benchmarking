<?php

/* BenchmarkingBundle:Default/CommandePhysique:index.html.twig */
class __TwigTemplate_668e03315648b71ac910ba7ed81790ec1222d5011454aa365ad4dc207721164b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/CommandePhysique:index.html.twig", 3);
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
        $__internal_e5c1d36c43e25a3b8973a820e88057d01cdc0e074ed099ca20a91037d0bfff63 = $this->env->getExtension("native_profiler");
        $__internal_e5c1d36c43e25a3b8973a820e88057d01cdc0e074ed099ca20a91037d0bfff63->enter($__internal_e5c1d36c43e25a3b8973a820e88057d01cdc0e074ed099ca20a91037d0bfff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5c1d36c43e25a3b8973a820e88057d01cdc0e074ed099ca20a91037d0bfff63->leave($__internal_e5c1d36c43e25a3b8973a820e88057d01cdc0e074ed099ca20a91037d0bfff63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_434c466f576b79fe34274ab172de018e204411bb77ae75bd08253dfe78963440 = $this->env->getExtension("native_profiler");
        $__internal_434c466f576b79fe34274ab172de018e204411bb77ae75bd08253dfe78963440->enter($__internal_434c466f576b79fe34274ab172de018e204411bb77ae75bd08253dfe78963440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Commandes Physiques - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_434c466f576b79fe34274ab172de018e204411bb77ae75bd08253dfe78963440->leave($__internal_434c466f576b79fe34274ab172de018e204411bb77ae75bd08253dfe78963440_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_f772ee13b4ee78135b01fa5db8bedfb338785100ef4d7cbae52962bd5bae5f2f = $this->env->getExtension("native_profiler");
        $__internal_f772ee13b4ee78135b01fa5db8bedfb338785100ef4d7cbae52962bd5bae5f2f->enter($__internal_f772ee13b4ee78135b01fa5db8bedfb338785100ef4d7cbae52962bd5bae5f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des commandes physiques</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCommandesPhysiques"]) ? $context["listCommandesPhysiques"] : $this->getContext($context, "listCommandesPhysiques")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commandePhysique"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_view", array("id" => $this->getAttribute($context["commandePhysique"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["commandePhysique"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de commandes physiques</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commandePhysique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>


";
        
        $__internal_f772ee13b4ee78135b01fa5db8bedfb338785100ef4d7cbae52962bd5bae5f2f->leave($__internal_f772ee13b4ee78135b01fa5db8bedfb338785100ef4d7cbae52962bd5bae5f2f_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:index.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Commandes Physiques - {{ parent() }}*/
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
/*   <h2>Liste des commandes physiques</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for commandePhysique in listCommandesPhysiques %}*/
/*       <li>*/
/*         <a href="{{ path('commandePhysique_view', {'id': commandePhysique.id}) }}">*/
/*           {{ commandePhysique.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de commandes physiques</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* */
/* {% endblock %}*/
/* */
