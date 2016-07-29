<?php

/* @Benchmarking/Default/AfficheurExistant/delete.html.twig */
class __TwigTemplate_c7a6719c5006206b5217ed35558693318bd14c06b6c6616fb79d18321a514d2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/AfficheurExistant/delete.html.twig", 3);
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
        $__internal_5a387fdbe326399c1c3816b3cd52b4305f40c50a8a52bf331d3c4a7d6a954d90 = $this->env->getExtension("native_profiler");
        $__internal_5a387fdbe326399c1c3816b3cd52b4305f40c50a8a52bf331d3c4a7d6a954d90->enter($__internal_5a387fdbe326399c1c3816b3cd52b4305f40c50a8a52bf331d3c4a7d6a954d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/AfficheurExistant/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a387fdbe326399c1c3816b3cd52b4305f40c50a8a52bf331d3c4a7d6a954d90->leave($__internal_5a387fdbe326399c1c3816b3cd52b4305f40c50a8a52bf331d3c4a7d6a954d90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d907f60caf9e8094ae0d8649c3e169fb1dcf071c4a335ab3c85b6025d491119c = $this->env->getExtension("native_profiler");
        $__internal_d907f60caf9e8094ae0d8649c3e169fb1dcf071c4a335ab3c85b6025d491119c->enter($__internal_d907f60caf9e8094ae0d8649c3e169fb1dcf071c4a335ab3c85b6025d491119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d907f60caf9e8094ae0d8649c3e169fb1dcf071c4a335ab3c85b6025d491119c->leave($__internal_d907f60caf9e8094ae0d8649c3e169fb1dcf071c4a335ab3c85b6025d491119c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_13848e9bdd6216c3d7181b111b1b61a300b06e7fd951c8dad7bb926e23c50e42 = $this->env->getExtension("native_profiler");
        $__internal_13848e9bdd6216c3d7181b111b1b61a300b06e7fd951c8dad7bb926e23c50e42->enter($__internal_13848e9bdd6216c3d7181b111b1b61a300b06e7fd951c8dad7bb926e23c50e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un afficheur</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer l'afficheur \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_delete", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_view", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'afficheur
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
        
        $__internal_13848e9bdd6216c3d7181b111b1b61a300b06e7fd951c8dad7bb926e23c50e42->leave($__internal_13848e9bdd6216c3d7181b111b1b61a300b06e7fd951c8dad7bb926e23c50e42_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/AfficheurExistant/delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/AfficheurExistant/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un afficheur</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer l'afficheur "{{ afficheur.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('afficheur_delete', {'id': afficheur.id}) }}" method="post">*/
/*     <a href="{{ path('afficheur_view', {'id': afficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'afficheur*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
