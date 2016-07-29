<?php

/* @Benchmarking/Default/Famille/delete.html.twig */
class __TwigTemplate_25e39f7470a48bae9da11ee3207e364603265fcc80bc1e7a60b4c650a7b4020e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Famille/delete.html.twig", 3);
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
        $__internal_7b2ad044f400542c8b90207c9c3ccef9a2a9e1386240b17cbe075f7dbdc504cc = $this->env->getExtension("native_profiler");
        $__internal_7b2ad044f400542c8b90207c9c3ccef9a2a9e1386240b17cbe075f7dbdc504cc->enter($__internal_7b2ad044f400542c8b90207c9c3ccef9a2a9e1386240b17cbe075f7dbdc504cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2ad044f400542c8b90207c9c3ccef9a2a9e1386240b17cbe075f7dbdc504cc->leave($__internal_7b2ad044f400542c8b90207c9c3ccef9a2a9e1386240b17cbe075f7dbdc504cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_128984ae7ba93b813537fc0a2bbcee1e08ad9d484784a5fc5c811caad801fb8f = $this->env->getExtension("native_profiler");
        $__internal_128984ae7ba93b813537fc0a2bbcee1e08ad9d484784a5fc5c811caad801fb8f->enter($__internal_128984ae7ba93b813537fc0a2bbcee1e08ad9d484784a5fc5c811caad801fb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_128984ae7ba93b813537fc0a2bbcee1e08ad9d484784a5fc5c811caad801fb8f->leave($__internal_128984ae7ba93b813537fc0a2bbcee1e08ad9d484784a5fc5c811caad801fb8f_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_d7994d552c5ddba46105a5631a70c3c7d28c02abd4925aff106b4743289f8554 = $this->env->getExtension("native_profiler");
        $__internal_d7994d552c5ddba46105a5631a70c3c7d28c02abd4925aff106b4743289f8554->enter($__internal_d7994d552c5ddba46105a5631a70c3c7d28c02abd4925aff106b4743289f8554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_d7994d552c5ddba46105a5631a70c3c7d28c02abd4925aff106b4743289f8554->leave($__internal_d7994d552c5ddba46105a5631a70c3c7d28c02abd4925aff106b4743289f8554_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Famille/delete.html.twig";
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
