<?php

/* @Benchmarking/Default/TechnologieAfficheur/edit.html.twig */
class __TwigTemplate_625d6ea6329bd465fd1e4cd1609b9ae90d9fdab539c99bdfab6b0e7671f92081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TechnologieAfficheur/edit.html.twig", 3);
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
        $__internal_9d1f625c25f7bf8d8783484e0225a9ca5ab847c8562b745e5f152eace467e43c = $this->env->getExtension("native_profiler");
        $__internal_9d1f625c25f7bf8d8783484e0225a9ca5ab847c8562b745e5f152eace467e43c->enter($__internal_9d1f625c25f7bf8d8783484e0225a9ca5ab847c8562b745e5f152eace467e43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1f625c25f7bf8d8783484e0225a9ca5ab847c8562b745e5f152eace467e43c->leave($__internal_9d1f625c25f7bf8d8783484e0225a9ca5ab847c8562b745e5f152eace467e43c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6eadd095e33ed12c8cb17a42ffa378de36b9b54f04fa10b1d199ff4f7de5fb = $this->env->getExtension("native_profiler");
        $__internal_9e6eadd095e33ed12c8cb17a42ffa378de36b9b54f04fa10b1d199ff4f7de5fb->enter($__internal_9e6eadd095e33ed12c8cb17a42ffa378de36b9b54f04fa10b1d199ff4f7de5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9e6eadd095e33ed12c8cb17a42ffa378de36b9b54f04fa10b1d199ff4f7de5fb->leave($__internal_9e6eadd095e33ed12c8cb17a42ffa378de36b9b54f04fa10b1d199ff4f7de5fb_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5c528f86d2d25c626d757ab649c49ea6bc947af896d50d6a198abf1617f6e77d = $this->env->getExtension("native_profiler");
        $__internal_5c528f86d2d25c626d757ab649c49ea6bc947af896d50d6a198abf1617f6e77d->enter($__internal_5c528f86d2d25c626d757ab649c49ea6bc947af896d50d6a198abf1617f6e77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une technologie afficheur</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TechnologieAfficheur/form.html.twig");
        echo "

  <p>
    Modification d'une technologie afficheur déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_view", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la technologie afficheur
    </a>
  </p>

";
        
        $__internal_5c528f86d2d25c626d757ab649c49ea6bc947af896d50d6a198abf1617f6e77d->leave($__internal_5c528f86d2d25c626d757ab649c49ea6bc947af896d50d6a198abf1617f6e77d_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TechnologieAfficheur/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TechnologieAfficheur/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une technologie afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TechnologieAfficheur/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une technologie afficheur déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('technologieAfficheur_view', {'id': technologieAfficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la technologie afficheur*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
