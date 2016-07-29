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
        $__internal_a3ce8e6060a33fe5613f5cc3930fa6839d6abf176b1b9ca956d168913371fb40 = $this->env->getExtension("native_profiler");
        $__internal_a3ce8e6060a33fe5613f5cc3930fa6839d6abf176b1b9ca956d168913371fb40->enter($__internal_a3ce8e6060a33fe5613f5cc3930fa6839d6abf176b1b9ca956d168913371fb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ce8e6060a33fe5613f5cc3930fa6839d6abf176b1b9ca956d168913371fb40->leave($__internal_a3ce8e6060a33fe5613f5cc3930fa6839d6abf176b1b9ca956d168913371fb40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6f71d9821b04a16798846dae10df70a3b6c4b6866946b847f94f80016606f2f = $this->env->getExtension("native_profiler");
        $__internal_e6f71d9821b04a16798846dae10df70a3b6c4b6866946b847f94f80016606f2f->enter($__internal_e6f71d9821b04a16798846dae10df70a3b6c4b6866946b847f94f80016606f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e6f71d9821b04a16798846dae10df70a3b6c4b6866946b847f94f80016606f2f->leave($__internal_e6f71d9821b04a16798846dae10df70a3b6c4b6866946b847f94f80016606f2f_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_09390d206ac3aba8d427147af0a6145f9dd3ec25f9c0869f56fef15b13d987c4 = $this->env->getExtension("native_profiler");
        $__internal_09390d206ac3aba8d427147af0a6145f9dd3ec25f9c0869f56fef15b13d987c4->enter($__internal_09390d206ac3aba8d427147af0a6145f9dd3ec25f9c0869f56fef15b13d987c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_09390d206ac3aba8d427147af0a6145f9dd3ec25f9c0869f56fef15b13d987c4->leave($__internal_09390d206ac3aba8d427147af0a6145f9dd3ec25f9c0869f56fef15b13d987c4_prof);

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
