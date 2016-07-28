<?php

/* BenchmarkingBundle:Default/AfficheurExistant:index.html.twig */
class __TwigTemplate_d2f53cbc0ec5101a0dac7f458bfaa3a43ae7d86c384c1ff9c4290f14d9c27dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/AfficheurExistant:index.html.twig", 3);
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
        $__internal_4e2f8a5a7bb99f7f504138fcca8bbff90f106433bb5e618c608fb8a2d358e52d = $this->env->getExtension("native_profiler");
        $__internal_4e2f8a5a7bb99f7f504138fcca8bbff90f106433bb5e618c608fb8a2d358e52d->enter($__internal_4e2f8a5a7bb99f7f504138fcca8bbff90f106433bb5e618c608fb8a2d358e52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/AfficheurExistant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2f8a5a7bb99f7f504138fcca8bbff90f106433bb5e618c608fb8a2d358e52d->leave($__internal_4e2f8a5a7bb99f7f504138fcca8bbff90f106433bb5e618c608fb8a2d358e52d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_838e7e34a98d69ec5fc53279244477e372bc055ca7c1580399a91c62c71b35e7 = $this->env->getExtension("native_profiler");
        $__internal_838e7e34a98d69ec5fc53279244477e372bc055ca7c1580399a91c62c71b35e7->enter($__internal_838e7e34a98d69ec5fc53279244477e372bc055ca7c1580399a91c62c71b35e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_838e7e34a98d69ec5fc53279244477e372bc055ca7c1580399a91c62c71b35e7->leave($__internal_838e7e34a98d69ec5fc53279244477e372bc055ca7c1580399a91c62c71b35e7_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_dc6c808d852de691a2942f546fa85cfff8b40975265a7ab027fb7c5486f4c046 = $this->env->getExtension("native_profiler");
        $__internal_dc6c808d852de691a2942f546fa85cfff8b40975265a7ab027fb7c5486f4c046->enter($__internal_dc6c808d852de691a2942f546fa85cfff8b40975265a7ab027fb7c5486f4c046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des afficheurs existants</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAfficheurs"]) ? $context["listAfficheurs"] : $this->getContext($context, "listAfficheurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["afficheur"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_view", array("id" => $this->getAttribute($context["afficheur"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["afficheur"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) d'afiicheur</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['afficheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("afficheur_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter un afficheur
  </a>


";
        
        $__internal_dc6c808d852de691a2942f546fa85cfff8b40975265a7ab027fb7c5486f4c046->leave($__internal_dc6c808d852de691a2942f546fa85cfff8b40975265a7ab027fb7c5486f4c046_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/AfficheurExistant:index.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/AfficheurExistant/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Afficheur - {{ parent() }}*/
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
/*   <h2>Liste des afficheurs existants</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for afficheur in listAfficheurs %}*/
/*       <li>*/
/*         <a href="{{ path('afficheur_view', {'id': afficheur.id}) }}">*/
/*           {{ afficheur.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'afiicheur</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('afficheur_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter un afficheur*/
/*   </a>*/
/* */
/* */
/* {% endblock %}*/
/* */
