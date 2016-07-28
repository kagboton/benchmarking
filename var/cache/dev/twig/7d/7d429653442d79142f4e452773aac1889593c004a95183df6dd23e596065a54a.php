<?php

/* BenchmarkingBundle:Default/SousTechnologieAfficheur:delete.html.twig */
class __TwigTemplate_405ce2b714737430fa6672eeb0fe6a097c4c0d8e77745baf10d7eb803f5aee18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/SousTechnologieAfficheur:delete.html.twig", 3);
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
        $__internal_20dbece18ad56cd933240d77b1d48d185439ac8ee269cc171d9ad917990b5b2b = $this->env->getExtension("native_profiler");
        $__internal_20dbece18ad56cd933240d77b1d48d185439ac8ee269cc171d9ad917990b5b2b->enter($__internal_20dbece18ad56cd933240d77b1d48d185439ac8ee269cc171d9ad917990b5b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20dbece18ad56cd933240d77b1d48d185439ac8ee269cc171d9ad917990b5b2b->leave($__internal_20dbece18ad56cd933240d77b1d48d185439ac8ee269cc171d9ad917990b5b2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d9b36f25512325f79283d0a6558e9862decde121612476cce63b96710ea177a = $this->env->getExtension("native_profiler");
        $__internal_6d9b36f25512325f79283d0a6558e9862decde121612476cce63b96710ea177a->enter($__internal_6d9b36f25512325f79283d0a6558e9862decde121612476cce63b96710ea177a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d9b36f25512325f79283d0a6558e9862decde121612476cce63b96710ea177a->leave($__internal_6d9b36f25512325f79283d0a6558e9862decde121612476cce63b96710ea177a_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_ce9864a02ac97a86625f4721f2ecae1075d1ad029268594ef804aa862ad461b7 = $this->env->getExtension("native_profiler");
        $__internal_ce9864a02ac97a86625f4721f2ecae1075d1ad029268594ef804aa862ad461b7->enter($__internal_ce9864a02ac97a86625f4721f2ecae1075d1ad029268594ef804aa862ad461b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une sous technologie afficheur</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la sous technologie afficheur \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_delete", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_view", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la sous technologie afficheur
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
        
        $__internal_ce9864a02ac97a86625f4721f2ecae1075d1ad029268594ef804aa862ad461b7->leave($__internal_ce9864a02ac97a86625f4721f2ecae1075d1ad029268594ef804aa862ad461b7_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/SousTechnologieAfficheur:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/SousTechnologieAfficheur/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une sous technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une sous technologie afficheur</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la sous technologie afficheur "{{ sousTechnologieAfficheur.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('sousTechnologieAfficheur_delete', {'id': sousTechnologieAfficheur.id}) }}" method="post">*/
/*     <a href="{{ path('sousTechnologieAfficheur_view', {'id': sousTechnologieAfficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la sous technologie afficheur*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
