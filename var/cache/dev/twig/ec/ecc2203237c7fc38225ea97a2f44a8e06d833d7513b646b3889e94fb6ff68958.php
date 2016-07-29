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
        $__internal_cf78de469b42cc504c62a116777a0b9b90c65e75dd1abb7a0e89745f0508ed8b = $this->env->getExtension("native_profiler");
        $__internal_cf78de469b42cc504c62a116777a0b9b90c65e75dd1abb7a0e89745f0508ed8b->enter($__internal_cf78de469b42cc504c62a116777a0b9b90c65e75dd1abb7a0e89745f0508ed8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeTdB/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf78de469b42cc504c62a116777a0b9b90c65e75dd1abb7a0e89745f0508ed8b->leave($__internal_cf78de469b42cc504c62a116777a0b9b90c65e75dd1abb7a0e89745f0508ed8b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a7038499304f22d46983d921e04713726ffdc390a58f733a091367564792108 = $this->env->getExtension("native_profiler");
        $__internal_2a7038499304f22d46983d921e04713726ffdc390a58f733a091367564792108->enter($__internal_2a7038499304f22d46983d921e04713726ffdc390a58f733a091367564792108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Type TdB - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a7038499304f22d46983d921e04713726ffdc390a58f733a091367564792108->leave($__internal_2a7038499304f22d46983d921e04713726ffdc390a58f733a091367564792108_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_576b8223b43691a559a68a4f949d7066a79fe8b384fe115f03004508f13612de = $this->env->getExtension("native_profiler");
        $__internal_576b8223b43691a559a68a4f949d7066a79fe8b384fe115f03004508f13612de->enter($__internal_576b8223b43691a559a68a4f949d7066a79fe8b384fe115f03004508f13612de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_576b8223b43691a559a68a4f949d7066a79fe8b384fe115f03004508f13612de->leave($__internal_576b8223b43691a559a68a4f949d7066a79fe8b384fe115f03004508f13612de_prof);

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
