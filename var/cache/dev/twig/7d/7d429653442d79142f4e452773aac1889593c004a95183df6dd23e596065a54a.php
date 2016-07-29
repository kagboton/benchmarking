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
        $__internal_dea9af3ac6bd9342727537faf50a1799c290594f60d2c53e95989b57dadaafe6 = $this->env->getExtension("native_profiler");
        $__internal_dea9af3ac6bd9342727537faf50a1799c290594f60d2c53e95989b57dadaafe6->enter($__internal_dea9af3ac6bd9342727537faf50a1799c290594f60d2c53e95989b57dadaafe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea9af3ac6bd9342727537faf50a1799c290594f60d2c53e95989b57dadaafe6->leave($__internal_dea9af3ac6bd9342727537faf50a1799c290594f60d2c53e95989b57dadaafe6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_de55a2198d15a31f5f98b1e035bee3d6d210ea5e0b53a331268dfc776f4d1a67 = $this->env->getExtension("native_profiler");
        $__internal_de55a2198d15a31f5f98b1e035bee3d6d210ea5e0b53a331268dfc776f4d1a67->enter($__internal_de55a2198d15a31f5f98b1e035bee3d6d210ea5e0b53a331268dfc776f4d1a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_de55a2198d15a31f5f98b1e035bee3d6d210ea5e0b53a331268dfc776f4d1a67->leave($__internal_de55a2198d15a31f5f98b1e035bee3d6d210ea5e0b53a331268dfc776f4d1a67_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_832ecbdf565d2ac42788d84b799e5706ce8193350b9b09d6a6cd0f3aedc3d7e4 = $this->env->getExtension("native_profiler");
        $__internal_832ecbdf565d2ac42788d84b799e5706ce8193350b9b09d6a6cd0f3aedc3d7e4->enter($__internal_832ecbdf565d2ac42788d84b799e5706ce8193350b9b09d6a6cd0f3aedc3d7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_832ecbdf565d2ac42788d84b799e5706ce8193350b9b09d6a6cd0f3aedc3d7e4->leave($__internal_832ecbdf565d2ac42788d84b799e5706ce8193350b9b09d6a6cd0f3aedc3d7e4_prof);

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
