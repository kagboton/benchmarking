<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig */
class __TwigTemplate_2acb496440b20bb737b10f1cecc50f34fdad2e72fc39c14e345b10624e445240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig", 3);
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
        $__internal_c7733cb3bee8a329e00e0498f9b12f0d980cb7aa374abbcfc09659e43db6f3e8 = $this->env->getExtension("native_profiler");
        $__internal_c7733cb3bee8a329e00e0498f9b12f0d980cb7aa374abbcfc09659e43db6f3e8->enter($__internal_c7733cb3bee8a329e00e0498f9b12f0d980cb7aa374abbcfc09659e43db6f3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7733cb3bee8a329e00e0498f9b12f0d980cb7aa374abbcfc09659e43db6f3e8->leave($__internal_c7733cb3bee8a329e00e0498f9b12f0d980cb7aa374abbcfc09659e43db6f3e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6989a821289dd49937ff87fa4219c77454a849230e1a574f2178819f6aed77ad = $this->env->getExtension("native_profiler");
        $__internal_6989a821289dd49937ff87fa4219c77454a849230e1a574f2178819f6aed77ad->enter($__internal_6989a821289dd49937ff87fa4219c77454a849230e1a574f2178819f6aed77ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6989a821289dd49937ff87fa4219c77454a849230e1a574f2178819f6aed77ad->leave($__internal_6989a821289dd49937ff87fa4219c77454a849230e1a574f2178819f6aed77ad_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_9b1be0534432b1bb3c1d6cf128dd7498778f84450aeed483277d51e7d3dc0da0 = $this->env->getExtension("native_profiler");
        $__internal_9b1be0534432b1bb3c1d6cf128dd7498778f84450aeed483277d51e7d3dc0da0->enter($__internal_9b1be0534432b1bb3c1d6cf128dd7498778f84450aeed483277d51e7d3dc0da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_9b1be0534432b1bb3c1d6cf128dd7498778f84450aeed483277d51e7d3dc0da0->leave($__internal_9b1be0534432b1bb3c1d6cf128dd7498778f84450aeed483277d51e7d3dc0da0_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig";
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
