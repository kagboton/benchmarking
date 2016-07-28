<?php

/* @Benchmarking/Default/TypeTdB/index.html.twig */
class __TwigTemplate_e13df1ca95d5d8c4d2bfe8b8f8ab542c11f5e4db08ee844ba14bf949cb64e4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeTdB/index.html.twig", 3);
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
        $__internal_19e06fa929c4e7a33b26be50a8b56e1bf21dc655a7fa7a5b92731861414d7f12 = $this->env->getExtension("native_profiler");
        $__internal_19e06fa929c4e7a33b26be50a8b56e1bf21dc655a7fa7a5b92731861414d7f12->enter($__internal_19e06fa929c4e7a33b26be50a8b56e1bf21dc655a7fa7a5b92731861414d7f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeTdB/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19e06fa929c4e7a33b26be50a8b56e1bf21dc655a7fa7a5b92731861414d7f12->leave($__internal_19e06fa929c4e7a33b26be50a8b56e1bf21dc655a7fa7a5b92731861414d7f12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfb9c35b937937313c35aaa171556afd8a771c1ed23de8c82e6eedb22e790e63 = $this->env->getExtension("native_profiler");
        $__internal_cfb9c35b937937313c35aaa171556afd8a771c1ed23de8c82e6eedb22e790e63->enter($__internal_cfb9c35b937937313c35aaa171556afd8a771c1ed23de8c82e6eedb22e790e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Type TdB - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cfb9c35b937937313c35aaa171556afd8a771c1ed23de8c82e6eedb22e790e63->leave($__internal_cfb9c35b937937313c35aaa171556afd8a771c1ed23de8c82e6eedb22e790e63_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_b6a296bbf1a79366b27e4c4d0aaf3f26e8c7b800c0d95312faea638a3a8e2027 = $this->env->getExtension("native_profiler");
        $__internal_b6a296bbf1a79366b27e4c4d0aaf3f26e8c7b800c0d95312faea638a3a8e2027->enter($__internal_b6a296bbf1a79366b27e4c4d0aaf3f26e8c7b800c0d95312faea638a3a8e2027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des types de tableau de bord</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTypesTdB"]) ? $context["listTypesTdB"] : $this->getContext($context, "listTypesTdB")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["typeTdB"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_view", array("id" => $this->getAttribute($context["typeTdB"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeTdB"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de type de tableau de bord</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeTdB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("typeTdB_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter un type de tableau de bord
  </a>


";
        
        $__internal_b6a296bbf1a79366b27e4c4d0aaf3f26e8c7b800c0d95312faea638a3a8e2027->leave($__internal_b6a296bbf1a79366b27e4c4d0aaf3f26e8c7b800c0d95312faea638a3a8e2027_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeTdB/index.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeTdB/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Type TdB - {{ parent() }}*/
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
/*   <h2>Liste des types de tableau de bord</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for typeTdB in listTypesTdB %}*/
/*       <li>*/
/*         <a href="{{ path('typeTdB_view', {'id': typeTdB.id}) }}">*/
/*           {{ typeTdB.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de type de tableau de bord</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('typeTdB_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter un type de tableau de bord*/
/*   </a>*/
/* */
/* */
/* {% endblock %}*/
/* */
