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
        $__internal_1b80967365b971858fc4c5f36037155c5c5eccce7e6b3fb577e107c7640a1ecb = $this->env->getExtension("native_profiler");
        $__internal_1b80967365b971858fc4c5f36037155c5c5eccce7e6b3fb577e107c7640a1ecb->enter($__internal_1b80967365b971858fc4c5f36037155c5c5eccce7e6b3fb577e107c7640a1ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/AfficheurExistant/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b80967365b971858fc4c5f36037155c5c5eccce7e6b3fb577e107c7640a1ecb->leave($__internal_1b80967365b971858fc4c5f36037155c5c5eccce7e6b3fb577e107c7640a1ecb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df48597b20834c7f1e6a404a1a8246460a07c559a5ec285bc3a837ffba663113 = $this->env->getExtension("native_profiler");
        $__internal_df48597b20834c7f1e6a404a1a8246460a07c559a5ec285bc3a837ffba663113->enter($__internal_df48597b20834c7f1e6a404a1a8246460a07c559a5ec285bc3a837ffba663113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_df48597b20834c7f1e6a404a1a8246460a07c559a5ec285bc3a837ffba663113->leave($__internal_df48597b20834c7f1e6a404a1a8246460a07c559a5ec285bc3a837ffba663113_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_b1872a6b63e67e6ae65563b761f244327050032e259e5850607550932c9fcb36 = $this->env->getExtension("native_profiler");
        $__internal_b1872a6b63e67e6ae65563b761f244327050032e259e5850607550932c9fcb36->enter($__internal_b1872a6b63e67e6ae65563b761f244327050032e259e5850607550932c9fcb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_b1872a6b63e67e6ae65563b761f244327050032e259e5850607550932c9fcb36->leave($__internal_b1872a6b63e67e6ae65563b761f244327050032e259e5850607550932c9fcb36_prof);

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
