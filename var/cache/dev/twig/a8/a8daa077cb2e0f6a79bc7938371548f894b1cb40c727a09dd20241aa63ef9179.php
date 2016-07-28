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
        $__internal_834e42ac14cf48b6f6b79daa7cb94bdb2cafbd3df1006b92e2ccef1db25b8670 = $this->env->getExtension("native_profiler");
        $__internal_834e42ac14cf48b6f6b79daa7cb94bdb2cafbd3df1006b92e2ccef1db25b8670->enter($__internal_834e42ac14cf48b6f6b79daa7cb94bdb2cafbd3df1006b92e2ccef1db25b8670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/SousTechnologieAfficheur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_834e42ac14cf48b6f6b79daa7cb94bdb2cafbd3df1006b92e2ccef1db25b8670->leave($__internal_834e42ac14cf48b6f6b79daa7cb94bdb2cafbd3df1006b92e2ccef1db25b8670_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc76e3184f82db0bb3d020525a1f4205dbb25527a9906900bd4909cd08d48176 = $this->env->getExtension("native_profiler");
        $__internal_fc76e3184f82db0bb3d020525a1f4205dbb25527a9906900bd4909cd08d48176->enter($__internal_fc76e3184f82db0bb3d020525a1f4205dbb25527a9906900bd4909cd08d48176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fc76e3184f82db0bb3d020525a1f4205dbb25527a9906900bd4909cd08d48176->leave($__internal_fc76e3184f82db0bb3d020525a1f4205dbb25527a9906900bd4909cd08d48176_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_f5cff1caad344459e30be3d6538b5dc6e8f9e4dcfda395786af1649abf0dfbaa = $this->env->getExtension("native_profiler");
        $__internal_f5cff1caad344459e30be3d6538b5dc6e8f9e4dcfda395786af1649abf0dfbaa->enter($__internal_f5cff1caad344459e30be3d6538b5dc6e8f9e4dcfda395786af1649abf0dfbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_f5cff1caad344459e30be3d6538b5dc6e8f9e4dcfda395786af1649abf0dfbaa->leave($__internal_f5cff1caad344459e30be3d6538b5dc6e8f9e4dcfda395786af1649abf0dfbaa_prof);

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
