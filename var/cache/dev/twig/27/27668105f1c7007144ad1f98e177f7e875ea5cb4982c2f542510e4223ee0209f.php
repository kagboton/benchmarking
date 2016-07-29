<?php

/* BenchmarkingBundle:Default/Famille:delete.html.twig */
class __TwigTemplate_f97bbe776161052af5183e60a7fe2bd5b68df0ed31207477d4e6135176b569c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Famille:delete.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ebeb09e9202ad48934bbc08c850933714a24bb82e387633b29c835e7e46b06a = $this->env->getExtension("native_profiler");
        $__internal_5ebeb09e9202ad48934bbc08c850933714a24bb82e387633b29c835e7e46b06a->enter($__internal_5ebeb09e9202ad48934bbc08c850933714a24bb82e387633b29c835e7e46b06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Famille:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ebeb09e9202ad48934bbc08c850933714a24bb82e387633b29c835e7e46b06a->leave($__internal_5ebeb09e9202ad48934bbc08c850933714a24bb82e387633b29c835e7e46b06a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5281ce0c578a39bc58eca12142fff91dc97bfe24e73062fa78d0c2ba34c2eeef = $this->env->getExtension("native_profiler");
        $__internal_5281ce0c578a39bc58eca12142fff91dc97bfe24e73062fa78d0c2ba34c2eeef->enter($__internal_5281ce0c578a39bc58eca12142fff91dc97bfe24e73062fa78d0c2ba34c2eeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5281ce0c578a39bc58eca12142fff91dc97bfe24e73062fa78d0c2ba34c2eeef->leave($__internal_5281ce0c578a39bc58eca12142fff91dc97bfe24e73062fa78d0c2ba34c2eeef_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_5fe581de33aa31616fd53c0bb6f25572d16be2688fa844852a9dc77b0ec9f78e = $this->env->getExtension("native_profiler");
        $__internal_5fe581de33aa31616fd53c0bb6f25572d16be2688fa844852a9dc77b0ec9f78e->enter($__internal_5fe581de33aa31616fd53c0bb6f25572d16be2688fa844852a9dc77b0ec9f78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "  <div class=\"panel-heading\">
   <h4 class=\"panel-title\">Supprimer une famille de fonctions</h4>
  </div>

  <div class=\"panel-body\">

    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la famille \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "nom", array()), "html", null, true);
        echo "\" ?
      Toutes les fonctions associées à cette famille seront supprimées.
    </p>

    ";
        // line 22
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_delete", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_view", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la famille
      </a>
      ";
        // line 28
        echo "
      <input type=\"submit\"  value=\"Supprimer\" class=\"btn btn-danger\"  />
      ";
        // line 31
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

  </div>

";
        
        $__internal_5fe581de33aa31616fd53c0bb6f25572d16be2688fa844852a9dc77b0ec9f78e->leave($__internal_5fe581de33aa31616fd53c0bb6f25572d16be2688fa844852a9dc77b0ec9f78e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Famille:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  85 => 28,  78 => 23,  73 => 22,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Famille/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/*   <div class="panel-heading">*/
/*    <h4 class="panel-title">Supprimer une famille de fonctions</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/* */
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la famille "{{ famille.nom }}" ?*/
/*       Toutes les fonctions associées à cette famille seront supprimées.*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('famille_delete', {'id': famille.id}) }}" method="post">*/
/*       <a href="{{ path('famille_view', {'id': famille.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la famille*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/* */
/*       <input type="submit"  value="Supprimer" class="btn btn-danger"  />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
