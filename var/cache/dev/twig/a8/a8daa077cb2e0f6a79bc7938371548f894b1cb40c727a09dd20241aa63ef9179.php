<?php

/* @Benchmarking/Default/SousTechnologieAfficheur/edit.html.twig */
class __TwigTemplate_f2612772bfc83f8f0ab2487c500bb47385809712f32586322ba50cf92ecf34ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/SousTechnologieAfficheur/edit.html.twig", 3);
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
        $__internal_a97b0c22238d55b8d79f5639f304d28111fdd2c55cd40155e1f9038b6608c25f = $this->env->getExtension("native_profiler");
        $__internal_a97b0c22238d55b8d79f5639f304d28111fdd2c55cd40155e1f9038b6608c25f->enter($__internal_a97b0c22238d55b8d79f5639f304d28111fdd2c55cd40155e1f9038b6608c25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/SousTechnologieAfficheur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97b0c22238d55b8d79f5639f304d28111fdd2c55cd40155e1f9038b6608c25f->leave($__internal_a97b0c22238d55b8d79f5639f304d28111fdd2c55cd40155e1f9038b6608c25f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a9e14cd2a362e6f6b20b5204f6d7fb3a132e49576ffe92812b40c387577ace9 = $this->env->getExtension("native_profiler");
        $__internal_0a9e14cd2a362e6f6b20b5204f6d7fb3a132e49576ffe92812b40c387577ace9->enter($__internal_0a9e14cd2a362e6f6b20b5204f6d7fb3a132e49576ffe92812b40c387577ace9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0a9e14cd2a362e6f6b20b5204f6d7fb3a132e49576ffe92812b40c387577ace9->leave($__internal_0a9e14cd2a362e6f6b20b5204f6d7fb3a132e49576ffe92812b40c387577ace9_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_775d1fa77a8056b2afd062b4bd1fb9715f9e0ddadb4daa3c4fc08ea35eb05d9e = $this->env->getExtension("native_profiler");
        $__internal_775d1fa77a8056b2afd062b4bd1fb9715f9e0ddadb4daa3c4fc08ea35eb05d9e->enter($__internal_775d1fa77a8056b2afd062b4bd1fb9715f9e0ddadb4daa3c4fc08ea35eb05d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une sous technologie afficheur</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig");
        echo "

  <p>
    Modification d'une sous technologie afficheur déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_view", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la sous technologie afficheur
    </a>
  </p>

";
        
        $__internal_775d1fa77a8056b2afd062b4bd1fb9715f9e0ddadb4daa3c4fc08ea35eb05d9e->leave($__internal_775d1fa77a8056b2afd062b4bd1fb9715f9e0ddadb4daa3c4fc08ea35eb05d9e_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/SousTechnologieAfficheur/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/SousTechnologieAfficheur/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une sous technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une sous technologie afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une sous technologie afficheur déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('sousTechnologieAfficheur_view', {'id': sousTechnologieAfficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la sous technologie afficheur*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
