<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:index.html.twig */
class __TwigTemplate_ce76d9fde0b67316901016b0bdeaa8267fc237c2dca063205d43d9f9152ec1f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TechnologieAfficheur:index.html.twig", 3);
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
        $__internal_313cb4822b93c75d668947a507fcfbf810c6f711ce45057c396538b1736d2a92 = $this->env->getExtension("native_profiler");
        $__internal_313cb4822b93c75d668947a507fcfbf810c6f711ce45057c396538b1736d2a92->enter($__internal_313cb4822b93c75d668947a507fcfbf810c6f711ce45057c396538b1736d2a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313cb4822b93c75d668947a507fcfbf810c6f711ce45057c396538b1736d2a92->leave($__internal_313cb4822b93c75d668947a507fcfbf810c6f711ce45057c396538b1736d2a92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f759163da529da6295a8b9261566aa9c5c14244983a9d31d5fc72d5c74cf4915 = $this->env->getExtension("native_profiler");
        $__internal_f759163da529da6295a8b9261566aa9c5c14244983a9d31d5fc72d5c74cf4915->enter($__internal_f759163da529da6295a8b9261566aa9c5c14244983a9d31d5fc72d5c74cf4915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Technologie Afficheur- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f759163da529da6295a8b9261566aa9c5c14244983a9d31d5fc72d5c74cf4915->leave($__internal_f759163da529da6295a8b9261566aa9c5c14244983a9d31d5fc72d5c74cf4915_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_3cf1202c388a2fa4d3ea1907a30145ccfd153a754bd03c5ec3472014060c3f06 = $this->env->getExtension("native_profiler");
        $__internal_3cf1202c388a2fa4d3ea1907a30145ccfd153a754bd03c5ec3472014060c3f06->enter($__internal_3cf1202c388a2fa4d3ea1907a30145ccfd153a754bd03c5ec3472014060c3f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des technologies afficheur</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTechnologiesAfficheur"]) ? $context["listTechnologiesAfficheur"] : $this->getContext($context, "listTechnologiesAfficheur")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["technologieAfficheur"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_view", array("id" => $this->getAttribute($context["technologieAfficheur"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["technologieAfficheur"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de technologie afficheur</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technologieAfficheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("technologieAfficheur_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter une technologie afficheur
  </a>


";
        
        $__internal_3cf1202c388a2fa4d3ea1907a30145ccfd153a754bd03c5ec3472014060c3f06->leave($__internal_3cf1202c388a2fa4d3ea1907a30145ccfd153a754bd03c5ec3472014060c3f06_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:index.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TechnologieAfficheur/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Technologie Afficheur- {{ parent() }}*/
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
/*   <h2>Liste des technologies afficheur</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for technologieAfficheur in listTechnologiesAfficheur %}*/
/*       <li>*/
/*         <a href="{{ path('technologieAfficheur_view', {'id': technologieAfficheur.id}) }}">*/
/*           {{ technologieAfficheur.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de technologie afficheur</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('technologieAfficheur_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter une technologie afficheur*/
/*   </a>*/
/* */
/* */
/* {% endblock %}*/
/* */
