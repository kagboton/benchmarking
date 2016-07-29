<?php

/* @Benchmarking/Default/AfficheurExistant/edit.html.twig */
class __TwigTemplate_1297fd65a9ba23edf0656336d36e28a13a58d76d05a9fb3de06b1720a2c3f3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/AfficheurExistant/edit.html.twig", 3);
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
        $__internal_ddf7dc914cfb2816db7250d03392032fa00f058f607ff16e5d5b586c9393d55c = $this->env->getExtension("native_profiler");
        $__internal_ddf7dc914cfb2816db7250d03392032fa00f058f607ff16e5d5b586c9393d55c->enter($__internal_ddf7dc914cfb2816db7250d03392032fa00f058f607ff16e5d5b586c9393d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/AfficheurExistant/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf7dc914cfb2816db7250d03392032fa00f058f607ff16e5d5b586c9393d55c->leave($__internal_ddf7dc914cfb2816db7250d03392032fa00f058f607ff16e5d5b586c9393d55c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32a03e6d07c2ec70c2bb6c1c2ac19b6796a7565a7d04a01c80f04f33c50ba97b = $this->env->getExtension("native_profiler");
        $__internal_32a03e6d07c2ec70c2bb6c1c2ac19b6796a7565a7d04a01c80f04f33c50ba97b->enter($__internal_32a03e6d07c2ec70c2bb6c1c2ac19b6796a7565a7d04a01c80f04f33c50ba97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_32a03e6d07c2ec70c2bb6c1c2ac19b6796a7565a7d04a01c80f04f33c50ba97b->leave($__internal_32a03e6d07c2ec70c2bb6c1c2ac19b6796a7565a7d04a01c80f04f33c50ba97b_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_99f1b577c94ffa5cde50d50b051ca0c919b74fc2de62e5dae42efea9b1e1d454 = $this->env->getExtension("native_profiler");
        $__internal_99f1b577c94ffa5cde50d50b051ca0c919b74fc2de62e5dae42efea9b1e1d454->enter($__internal_99f1b577c94ffa5cde50d50b051ca0c919b74fc2de62e5dae42efea9b1e1d454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un afficheur</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:AfficheurExistant/form.html.twig");
        echo "

  <p>
    Modification d'un afficheur déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_view", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'afficheur
    </a>
  </p>

";
        
        $__internal_99f1b577c94ffa5cde50d50b051ca0c919b74fc2de62e5dae42efea9b1e1d454->leave($__internal_99f1b577c94ffa5cde50d50b051ca0c919b74fc2de62e5dae42efea9b1e1d454_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/AfficheurExistant/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/AfficheurExistant/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:AfficheurExistant/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un afficheur déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('afficheur_view', {'id': afficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'afficheur*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
