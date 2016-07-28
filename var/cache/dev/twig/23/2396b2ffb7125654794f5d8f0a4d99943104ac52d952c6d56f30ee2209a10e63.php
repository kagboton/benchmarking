<?php

/* BenchmarkingBundle:Default/Localisation:delete.html.twig */
class __TwigTemplate_900ab75aa56629d111d49d427f3d373e88d02a21f5f5ece9ff28c397c2fe1a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/Localisation:delete.html.twig", 3);
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
        $__internal_d15e3d4055028efa091caed0df0548437bfb6b477603ef4789735d3de1804c6e = $this->env->getExtension("native_profiler");
        $__internal_d15e3d4055028efa091caed0df0548437bfb6b477603ef4789735d3de1804c6e->enter($__internal_d15e3d4055028efa091caed0df0548437bfb6b477603ef4789735d3de1804c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Localisation:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15e3d4055028efa091caed0df0548437bfb6b477603ef4789735d3de1804c6e->leave($__internal_d15e3d4055028efa091caed0df0548437bfb6b477603ef4789735d3de1804c6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12c915125f1cba0f6700608caeadeb8530aea263cead00006fb18e233ba1deca = $this->env->getExtension("native_profiler");
        $__internal_12c915125f1cba0f6700608caeadeb8530aea263cead00006fb18e233ba1deca->enter($__internal_12c915125f1cba0f6700608caeadeb8530aea263cead00006fb18e233ba1deca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_12c915125f1cba0f6700608caeadeb8530aea263cead00006fb18e233ba1deca->leave($__internal_12c915125f1cba0f6700608caeadeb8530aea263cead00006fb18e233ba1deca_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_dcea2e98965046c93ebdbdb1b8e96fe13374a2087c766871feef679e51a33589 = $this->env->getExtension("native_profiler");
        $__internal_dcea2e98965046c93ebdbdb1b8e96fe13374a2087c766871feef679e51a33589->enter($__internal_dcea2e98965046c93ebdbdb1b8e96fe13374a2087c766871feef679e51a33589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une localisation</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la localisation \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_delete", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_view", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la localisation
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_dcea2e98965046c93ebdbdb1b8e96fe13374a2087c766871feef679e51a33589->leave($__internal_dcea2e98965046c93ebdbdb1b8e96fe13374a2087c766871feef679e51a33589_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Localisation:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Localisation/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une localisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une localisation</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la localisation "{{ localisation.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('localisation_delete', {'id': localisation.id}) }}" method="post">*/
/*     <a href="{{ path('localisation_view', {'id': localisation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la localisation*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
