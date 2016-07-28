<?php

/* BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig */
class __TwigTemplate_c1b6a03f2771489b95e99c98572bd06cd98dbfdb47b52243c638ec64c08b021e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig", 3);
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
        $__internal_884ee2983c4c3bef021700a5eeea7e818fbe514c95ca81848534611a9d0edfd5 = $this->env->getExtension("native_profiler");
        $__internal_884ee2983c4c3bef021700a5eeea7e818fbe514c95ca81848534611a9d0edfd5->enter($__internal_884ee2983c4c3bef021700a5eeea7e818fbe514c95ca81848534611a9d0edfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884ee2983c4c3bef021700a5eeea7e818fbe514c95ca81848534611a9d0edfd5->leave($__internal_884ee2983c4c3bef021700a5eeea7e818fbe514c95ca81848534611a9d0edfd5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f9218e18c0b2262da0c3470d435cdfd85e470e8fba5dbecb9b9e548c728f875 = $this->env->getExtension("native_profiler");
        $__internal_8f9218e18c0b2262da0c3470d435cdfd85e470e8fba5dbecb9b9e548c728f875->enter($__internal_8f9218e18c0b2262da0c3470d435cdfd85e470e8fba5dbecb9b9e548c728f875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f9218e18c0b2262da0c3470d435cdfd85e470e8fba5dbecb9b9e548c728f875->leave($__internal_8f9218e18c0b2262da0c3470d435cdfd85e470e8fba5dbecb9b9e548c728f875_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_6afdfb6fec4587de4a55c0df40842fe2afb4ce3c2a3a5c201b1e25b8ebeef4f7 = $this->env->getExtension("native_profiler");
        $__internal_6afdfb6fec4587de4a55c0df40842fe2afb4ce3c2a3a5c201b1e25b8ebeef4f7->enter($__internal_6afdfb6fec4587de4a55c0df40842fe2afb4ce3c2a3a5c201b1e25b8ebeef4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_6afdfb6fec4587de4a55c0df40842fe2afb4ce3c2a3a5c201b1e25b8ebeef4f7->leave($__internal_6afdfb6fec4587de4a55c0df40842fe2afb4ce3c2a3a5c201b1e25b8ebeef4f7_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/SousTechnologieAfficheur:edit.html.twig";
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
