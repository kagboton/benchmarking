<?php

/* @Benchmarking/Default/FonctionExistante/delete.html.twig */
class __TwigTemplate_f3e23c7cb2928d086b9364b501f368799df691eeb59607f1d72539ce272da196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/FonctionExistante/delete.html.twig", 3);
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
        $__internal_9908d9ca139ee04d487991996d08e0ebb741619f0cdc82b02d9a134984b19068 = $this->env->getExtension("native_profiler");
        $__internal_9908d9ca139ee04d487991996d08e0ebb741619f0cdc82b02d9a134984b19068->enter($__internal_9908d9ca139ee04d487991996d08e0ebb741619f0cdc82b02d9a134984b19068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9908d9ca139ee04d487991996d08e0ebb741619f0cdc82b02d9a134984b19068->leave($__internal_9908d9ca139ee04d487991996d08e0ebb741619f0cdc82b02d9a134984b19068_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_178a8f2a7d0502c53ada2683895b89edfc318ed1a7047f28021108b8e460e3a7 = $this->env->getExtension("native_profiler");
        $__internal_178a8f2a7d0502c53ada2683895b89edfc318ed1a7047f28021108b8e460e3a7->enter($__internal_178a8f2a7d0502c53ada2683895b89edfc318ed1a7047f28021108b8e460e3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_178a8f2a7d0502c53ada2683895b89edfc318ed1a7047f28021108b8e460e3a7->leave($__internal_178a8f2a7d0502c53ada2683895b89edfc318ed1a7047f28021108b8e460e3a7_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_fe799425bc0dacede1a5778d6cb5347b561cb6628bd4ae6e03a4b6bd0e6af0f2 = $this->env->getExtension("native_profiler");
        $__internal_fe799425bc0dacede1a5778d6cb5347b561cb6628bd4ae6e03a4b6bd0e6af0f2->enter($__internal_fe799425bc0dacede1a5778d6cb5347b561cb6628bd4ae6e03a4b6bd0e6af0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer une fonction</h4>
  </div>

  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la fonction \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 21
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_delete", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_view", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la fonction
      </a>
      ";
        // line 27
        echo "      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
      ";
        // line 29
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

  </div>


";
        
        $__internal_fe799425bc0dacede1a5778d6cb5347b561cb6628bd4ae6e03a4b6bd0e6af0f2->leave($__internal_fe799425bc0dacede1a5778d6cb5347b561cb6628bd4ae6e03a4b6bd0e6af0f2_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FonctionExistante/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  84 => 27,  77 => 22,  72 => 21,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FonctionExistante/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer une fonction</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la fonction "{{ fonction.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('fonction_delete', {'id': fonction.id}) }}" method="post">*/
/*       <a href="{{ path('fonction_view', {'id': fonction.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la fonction*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
