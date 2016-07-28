<?php

/* @Benchmarking/Default/SousTechnologieAfficheur/index.html.twig */
class __TwigTemplate_749ee0abcf779e5158ae4d62697c1a6cfcc1be32fb8eca039ffd6beb86ddc3ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/SousTechnologieAfficheur/index.html.twig", 3);
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
        $__internal_ec5177cd4cf87966f5e109a5d506ec4f19092b30606037781a206d22a6408329 = $this->env->getExtension("native_profiler");
        $__internal_ec5177cd4cf87966f5e109a5d506ec4f19092b30606037781a206d22a6408329->enter($__internal_ec5177cd4cf87966f5e109a5d506ec4f19092b30606037781a206d22a6408329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/SousTechnologieAfficheur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5177cd4cf87966f5e109a5d506ec4f19092b30606037781a206d22a6408329->leave($__internal_ec5177cd4cf87966f5e109a5d506ec4f19092b30606037781a206d22a6408329_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa710de0f1bab2f2e8ea56ef8d6fec7743540ec233ebe479a84ea114eff00c0f = $this->env->getExtension("native_profiler");
        $__internal_aa710de0f1bab2f2e8ea56ef8d6fec7743540ec233ebe479a84ea114eff00c0f->enter($__internal_aa710de0f1bab2f2e8ea56ef8d6fec7743540ec233ebe479a84ea114eff00c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Sous Technologie Afficheur- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aa710de0f1bab2f2e8ea56ef8d6fec7743540ec233ebe479a84ea114eff00c0f->leave($__internal_aa710de0f1bab2f2e8ea56ef8d6fec7743540ec233ebe479a84ea114eff00c0f_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_7611111d911a6cb8685f61488836687c17af07762bd26445277915f694ae6885 = $this->env->getExtension("native_profiler");
        $__internal_7611111d911a6cb8685f61488836687c17af07762bd26445277915f694ae6885->enter($__internal_7611111d911a6cb8685f61488836687c17af07762bd26445277915f694ae6885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des sous technologies afficheur</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSousTechnologiesAfficheur"]) ? $context["listSousTechnologiesAfficheur"] : $this->getContext($context, "listSousTechnologiesAfficheur")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sousTechnologieAfficheur"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_view", array("id" => $this->getAttribute($context["sousTechnologieAfficheur"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["sousTechnologieAfficheur"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de sous technologies afficheur</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousTechnologieAfficheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter une sous technologie afficheur
  </a>


";
        
        $__internal_7611111d911a6cb8685f61488836687c17af07762bd26445277915f694ae6885->leave($__internal_7611111d911a6cb8685f61488836687c17af07762bd26445277915f694ae6885_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/SousTechnologieAfficheur/index.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/SousTechnologieAfficheur/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Sous Technologie Afficheur- {{ parent() }}*/
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
/*   <h2>Liste des sous technologies afficheur</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for sousTechnologieAfficheur in listSousTechnologiesAfficheur %}*/
/*       <li>*/
/*         <a href="{{ path('sousTechnologieAfficheur_view', {'id': sousTechnologieAfficheur.id}) }}">*/
/*           {{ sousTechnologieAfficheur.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de sous technologies afficheur</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('sousTechnologieAfficheur_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter une sous technologie afficheur*/
/*   </a>*/
/* */
/* */
/* {% endblock %}*/
/* */
